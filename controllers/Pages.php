<?php
class Pages extends Controller
{
    

    public function index()
    {
        $data = [
            'title' => 'index'
        ];

        $this->view('main/index', $data);
    }

    public function result()
    {
        $data = [
            'title' => 'result'
        ];

        $this->view('main/result', $data);
    }

    public function montecristi()
    {
        $data = [
            'title' => 'Montécristi'
        ];

        $this->view('main/montecristi', $data);
    }

    public function fedora()
    {
        $data = [
            'title' => 'Fedora'
        ];

        $this->view('main/fedora', $data);
    }
   
    public function mode()
    {
        $data = [
            'title' => 'Mode'
        ];

        $this->view('main/mode', $data);
    }
}