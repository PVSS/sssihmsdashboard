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
            "emp" => $this->getmonthlystats(),
            "m_emp" => $this->getmonthlystats(),
            "f_emp" => $this->getmonthlystats(),
            "mf_emp" => $this->getmonthlystats(),
            "dept_emp" => $this->getmonthlystats(),
            "gender_dept_emp" => $this->getmonthlystats(),
            "year_emp_dept" => $this->getmonthlystats(),
        );  
        return json_encode($res); 
    
    }   

    
    private function getmonthlystats() {
        $year = $this->input->post('year');
        $str = "SELECT month, count as total FROM `monthly_stats` WHERE YEAR(year) = '{$year}' and hospital_id = 123 GROUP BY month";
        $query = $this->db->query($str);
        $res = array();
        foreach ($query->result_array() as $value) {
            $res[]=array(
                "total" => $value['total'],
                "month" => $value['month'],
            );
        }
        return $res;
    }
    

}

