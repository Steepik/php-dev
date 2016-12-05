<?php

class News extends Controller
{

    private $_template = 'news/news_view';

    public function index()
    {

        $news = $this->model('News_model');

        $data['content'] = $this->_template;

        $data['paginate'] = $news->paginate();

        return $this->view_template($data);
    }
}
?>