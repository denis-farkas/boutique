<?php
class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
       
    }
    
    public function index()
    {
        $data = [
            'title' => 'index'
        ];

        $this->view('main/index', $data);
    }

    public function promotion($id_article)
    {
        $promotion= $this->pageModel->promotion($id_article);
        
                $data = [
                    'title' => 'promotion',
                    'promotion' => $promotion
                ];
        
                $this->view('main/index', $data);
    }

    public function meilleureVente($id_article)
    {
        $meilleureVente = $this->pageModel->meilleureVente($id_article);
        
                $data = [
                    'title' => 'meilleure Vente',
                    'meilleureVente' => $meilleurVente
                ];
        
                $this->view('main/index', $data);
    }

    public function plusRecent($id_article)
    {
        $plusRecent = $this->pageModel->plusRecent($id_article);
        
                $data = [
                    'title' => 'plus Réçent',
                    'plusRecent' => $plusRecent
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