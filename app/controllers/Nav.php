<?php

class Nav extends Controller
{
    protected $_template = 'nav/nav';

    public function index()
    {
        $menu = $this->model('Menu_model');

        return $this->view_category($menu->get_cat());
    }

    //вывод каталога с помощью рекурсии
    public function view_category($array, $parent_id = 0)
    {

        //Условия выхода из рекурсии
        if (empty($array[$parent_id])) {
            return;
        }
        $data['content'] = $this->_template;

        $this->view_template($data);

        echo '<ul>';
        //перебираем в цикле массив и выводим на экран
        for ($i = 0; $i < count($array[$parent_id]); $i++) {
            echo '<li><a href="#">'
                . $array[$parent_id][$i]['title'] . '</a>';
            //рекурсия - проверяем нет ли дочерних категорий
            $this->view_category($array, $array[$parent_id][$i]['id']);
            echo '</li>';
        }
        echo '</ul>';

    }
}