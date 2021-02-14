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

  
}