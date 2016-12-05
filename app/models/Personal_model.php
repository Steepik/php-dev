<?php

class Personal_model
{
    public function __construct()
    {
        new DB();
    }

    /**
     * Вывести на экран сотрудников, получающих заработную плату большую чем у непосредственного руководителя
     *
     * @return resource
     */
    public function getSalaryEmployee()
    {
        $sql = 'SELECT emp.* 
                       FROM  `employee` as emp, `employee` as sec_emp 
                       where sec_emp.id = emp.chief_id 
                       and emp.salary > sec_emp.salary';

        $result = mysql_query($sql);

        return $result;
    }

    /**
     * Вывести список сотрудников, получающих максимальную заработную плату в своем отделе
     *
     * @return resource
     */
    public function getMaxSalary()
    {
        $sql = 'SELECT emp.* 
                       FROM  `employee` as emp 
                       WHERE emp.salary = ( SELECT MAX(salary) 
                       FROM `employee` as sec_emp 
                       WHERE  sec_emp.department_id = emp.department_id )';

        $result = mysql_query($sql);

        return $result;
    }

    /**
     * Вывести список ID отделов, количество сотрудников в которых не превышает 3 человек
     *
     * @return resource
     */
    public function getID()
    {
        $sql = 'SELECT `department_id` 
                        FROM `employee` 
                        GROUP BY `department_id` 
                        HAVING COUNT(*) <= 3';

        $result = mysql_query($sql);

        return $result;
    }

    /**
     * Вывести список сотрудников, не имеющих назначенного руководителя, работающего в том-же отделе
     *
     * @return resource
     */
    public function getNoHead()
    {
        $sql = 'SELECT emp.* 
                       FROM `employee` as emp 
                         LEFT JOIN `employee` as sec_emp 
                         ON (sec_emp.id = emp.chief_id 
                         AND sec_emp.department_id = emp.department_id) 
                       WHERE  sec_emp.id is null';

        $result = mysql_query($sql);

        return $result;
    }
}

?>