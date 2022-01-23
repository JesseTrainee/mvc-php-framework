<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Models\Produto;
use App\Models\Info;
use MF\Model\Container;
class IndexController extends Action{

    public function index() {

        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;
        
        $this->render('index', 'layout1');
    }

    public function sobreNos() {
        $info = Container::getModel('Info');

        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'layout1');
    }

}
?>