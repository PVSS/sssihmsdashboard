<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sssihmsdashboard extends CI_Controller {
    protected $data = '';
    public function __construct() {
        parent::__construct();
        $this->load->model('sssihms/dashboard_qry');
    }
    
    public function index(){
        $this->_init_add();
        $this->template
            ->title('Dashboard',$this->apps->name)
            ->set_layout('sssihms')
            ->build('sssihmsdashboard/index',$this->data);			
    }
    
    public function getAllStats() {
        echo $this->dashboard_qry->getAllStats();
        #echo "Hello World";
    }
    
    private function _init_add(){
        $this->data['form'] = array(
           'Year'=> array(
                    'placeholder' => 'Year',
                    'id'          => 'year',
                    'name'        => 'year',
                    'value'       => "2018",
                    'required'    => '',
            )
           
        );
    }    
}
