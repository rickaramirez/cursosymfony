<?php

namespace Products\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    private $products = array(
        array ("id_producto" => 1,
                "title" => "Bolsas de plastico",
                "description" => "descripcion de Bolsas de plastico",
                "production_year" => 1997,
                "image" =>  "bolsas.png"),
        array ("id_producto" => 2,
                "title" => "Popotes Largos",
                "description" => "descripcion de popotes",
                "production_year" => 2016,
                "image" =>  "popotes.png"),
    );
    
    Public function indexAction(){
        return $this->render('ProductsProductBundle:Products:index.html.twig',
        array ("products" => $this->products));
    }
    
    Public function getProductAction($id_product){
        return $this->render('ProductsProductBundle:Products:product.html.twig',
                array ("product_id" => $id_product));
    }
}
