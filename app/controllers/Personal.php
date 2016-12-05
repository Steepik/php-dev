<?php

class Personal extends Controller
{
    protected $_template = 'personal/personal';

    public function index()
    {
        $personal = $this->model('Personal_model');

        $data['content'] = $this->_template;

        $data['salary'] = $personal->getSalaryEmployee();

        $data['max_salary'] = $personal->getMaxSalary();

        $data['get_id'] = $personal->getID();

        $data['no_head'] = $personal->getNoHead();

        return $this->view_template($data);
    }
}
?>