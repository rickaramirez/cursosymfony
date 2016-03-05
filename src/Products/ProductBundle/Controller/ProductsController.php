<?php

namespace Products\ProductBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Products\ProductBundle\Entity\Product;

class ProductsController extends Controller
{
    /*private $products = array(
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
    );*/
    
    Public function indexAction(){
        
        $products = array();
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('ProductsProductBundle:Product')->findBy(array(), array("title" => "asc"));
        
        return $this->render('ProductsProductBundle:Products:index.html.twig', array("products"=>$products) );
    }
    
    Public function getProductAction($id_product){

        return $this->render('ProductsProductBundle:Products:product.html.twig',
                array ("product_id" => $id_product));
    }
    
    Public function editProductAction($id_product){
        
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('ProductsProductBundle:Product')->find($id_product);
        if(!$product){
            throw $this->createNotFoundException("No se encontró el id: ". $id_product);
        }
        $product->setTitle("Nuevo nombre");
        $em->persist($product);
        $em->flush();
        //return new Response("Producto id: ".$id_product." Editado");
        return $this->redirectToRoute("products_product_homepage");
    }
    
    Public function deleteProductAction($id_product){
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('ProductsProductBundle:Product')->find($id_product);
        if(!$product){
            throw $this->createNotFoundException("No se encontró el id: ". $id_product);
        }
        $em->remove($product);
        //$em->persist($product);
        $em->flush();
         //return new Response("Producto id: ".$id_product." Eliminado");
         return $this->redirectToRoute("products_product_homepage");
    }
    
    Public function newProductAction(){
        $product = new Product();
        $product->setTitle("Bolsas de Plastico");
        $product->setImage("bolsasplastico.png");
        $product->setDescription("Descripción de las bolsas de plastico");
        $product->setProductionYear(1987);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($product); //se asegura de mandar el tipo de datos que se delararon
        $em->flush(); //guarda los datos en la BD despues de validados
        //die("sdfg");
        return new Response("producto creado".$product->getId());
        
        
        //return $this->redirectToRoute("products_product_homepage");
    }
}
