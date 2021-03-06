<?php
/*
 * ***************************************************************
 * Script : Dashboard_qry.php
 * Version : 
 * Date Created : 
 * Author : 
 * Email : 
 * Description : Contains all the queries to DB to aggreate across 
 * ***************************************************************
 */
/**
 * Description of Dashboard_qry
 *
 * @author mrpud
 */
class Dashboard_qry extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();  
    }
    
    public function getAllStats() {
    
    
        $res = array(
            "outpatients" => $this->getPatientsDetails('op'),
            "inpatients" => $this->getPatientsDetails('ip'),
            "yearlycount" => $this->getYearlyTrends(),
           
        );  
        return json_encode($res); 
    
    }   

    private function getYearlyTrends(){
        $yearly_tend = 'SELECT YEAR(year) as year, SUM(count) as total FROM `monthly_stats` GROUP BY year';
        $query = $this->db->query($yearly_tend);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "year" => $value['year'],
            );
        }
        return $res;
    }

    private function getPatientsDetails($op_ip) {
        $year = $this->input->post('year');
        $hosp = $this->input->post('hospital');
        $dept = $this->input->post('department');
        $month = $this->input->post('month');
        $nmonth = date("m", strtotime($month));
        
        $hosp_id_q =  "SELECT hospital_id as id FROM `hospital` WHERE hospital_name='{$hosp}'";
        $hosp_id_res = $this->db->query($hosp_id_q );
        $hosp_id = -1;
        foreach ($hosp_id_res->result_array() as $value) {
           $hosp_id = $value['id']; 
        }

        $dept_id_q = "SELECT department_id as id FROM department WHERE department_name='{$dept}'";
        $dept_id_res = $this->db->query($dept_id_q);
        $dept_id = -1;
        foreach($dept_id_res->result_array() as $value){
            $dept_id = $value['id'];
        }

        $whereclause = '';
        if($hosp_id != -1){
            $whereclause = $whereclause." and hospital_id = '{$hosp_id}' ";
        }
        if($dept_id != -1){
            $whereclause = $whereclause." and department_id = '{$dept_id}' ";
        }
        
        if($month != "AllMonths" )
        {
            $whereclause = $whereclause." and MONTH(month) = $nmonth ";
        }
        $out_patients = "SELECT month, SUM(count) as total FROM `monthly_stats` WHERE YEAR(year) = '{$year}'".$whereclause."and op_ip = '{$op_ip}' GROUP BY month";
        #print ($out_patients);
        file_put_contents('php://stderr', print_r($out_patients, TRUE));
        file_put_contents('php://stderr', print_r('\n', TRUE));
        file_put_contents('php://stderr', print_r($month, TRUE));
        file_put_contents('php://stderr', print_r('\n', TRUE));


        $query = $this->db->query($out_patients);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "month" => date("F", strtotime($value['month'])),
            );
        }
        return $res;
    }

    public function getAllDropdownOptions(){
        $year = "SELECT DISTINCT YEAR(year) as year from monthly_stats ORDER BY year";
        $dept = "SELECT DISTINCT department_name as dept FROM department";
        $hosp = "SELECT DISTINCT hospital_name as hosp FROM hospital";

        $query_year = $this->db->query($year);
        $yrs = array();
        foreach ($query_year->result_array() as $value) {
            $yrs[]=array(
                "year" => $value['year']
            );
        }
        
        $query_dept = $this->db->query($dept);
        $depts = array();
        foreach ($query_dept->result_array() as $value){
            $depts[]=array(
                "dept"=> $value['dept']
            );
        }

        $query_hosp = $this->db->query($hosp);
        $hospitals = array();
        foreach($query_hosp->result_array() as $value){
            $hospitals[]=array(
                "hosp"=>$value['hosp']
            );
        }

        
        $result = array(
            "years" => $yrs,
            "depts" =>  $depts,
            "hospitals" => $hospitals,
        );  
        return json_encode($result);
    }

    

}

