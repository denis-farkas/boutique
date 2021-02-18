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

    public function termes()
    {
        $data = [
            'title' => 'termes et conditions de vente'
        ];

        $this->view('main/termes', $data);
    }

  
}