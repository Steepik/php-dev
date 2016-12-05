<?php

class Home extends Controller
{
    private $_template = 'home/index';

    public function index()
    {
        $data['content'] = $this->_template;
        $this->view_template($data);
    }

    public function palindrom()
    {
        $this->_template = 'home/palindrom';

        $data['content'] = $this->_template;
        $text = "Васяясав";
        $data['resultTrue'] = "Результат - палиндром\n";
        $data['resultFalse'] = "Результат - не палиндром\n";

        $text = mb_strtolower($text);

        $data['text1'] = str_replace(" ","",$text);

        $data['text2'] = $this->strrev_enc($data['text1']);

        if ($data['text1'] == $data['text2']) {
            $data['result'] = "палидром";
        } else {
            $data['result'] = "не палидром";
        }

        return $this->view_template($data);
    }

    public function strrev_enc($text2)
    {
        $text2 = iconv('utf-8', 'windows-1251', $text2);
        $text2 = strrev($text2);
        $text2 = iconv('windows-1251', 'utf-8', $text2);
        return $text2;
    }
}