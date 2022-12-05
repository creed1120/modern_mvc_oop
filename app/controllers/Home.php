<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        // echo "Home Controller";

        $results = new Model;
        $results->test();

        $this->view('home');
    }
}