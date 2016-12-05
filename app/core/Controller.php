<?php

class Controller
{
    /**
     * Model
     *
     * @param $model
     * @return mixed
     */
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    /**
     * View
     *
     * @param $view
     * @param array $data
     */
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function view_template($data = [])
    {
        require_once '../app/views/app.php';
    }
}