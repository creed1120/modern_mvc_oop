<?php

class Home extends Controller
{
    public function index()
    {
        echo "This is the Home Controller";
    }
}

$home = new Home;
$home->index();