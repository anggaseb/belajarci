<?php

class Angga extends CI_Controller
{
    public function index()
    {
        echo "Hello Index";
    }

    public function berkata()
    {
        echo "ini function berkata";
    }

    public function iniparam($param1=null,$param2='')
    {
        echo "ini adalah ".$param1." dan ".$param2;
    }

    public function template()
    {
        $this->load->view('template');
    }

    public function tes(Type $var = null)
    {
        # code...
    }

    public function tes lagi(Type $var = null)
    {
        # code...
    }
}