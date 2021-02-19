<?php
class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
       
    }
    
    public function index()
    {
        $promotion= $this->pageModel->promotion();
        $meilleureVente = $this->pageModel->meilleureVente();
       
        $data = [
            'title' => 'index',
            'promotion' => $promotion,
            'meilleureVente' => $meilleureVente            
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