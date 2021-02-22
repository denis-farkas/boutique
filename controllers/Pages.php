<?php
class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
       
    }
    
    public function index()
    {
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);
            $promotion= $this->pageModel->promotion();
            $meilleureVente = $this->pageModel->meilleureVente();

            $data = [
                'title' => 'index',
                'promotion' => $promotion,
                'meilleureVente' => $meilleureVente,
                'search' => $search            
            ];
    
            $this->view('main/index', $data);

        }else{
            $promotion= $this->pageModel->promotion();
            $meilleureVente = $this->pageModel->meilleureVente();
            $data = [
                'title' => 'index',
                'promotion' => $promotion,
                'meilleureVente' => $meilleureVente,        
            ];
    
            $this->view('main/index', $data);  
        }

      
       
        $data = [
            'title' => 'index',
            'promotion' => $promotion,
            'meilleureVente' => $meilleureVente,
                     
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

    public function merci()
    {
        $data = [
            'title' => 'Merci'
        ];

        $this->view('main/merci', $data);
    }

    public function panierVide()
    {
        $data = [
            'title' => 'panier vide'
        ];

        $this->view('main/panierVide', $data);
    }

  
}