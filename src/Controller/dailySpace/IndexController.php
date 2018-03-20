<?php

namespace App\Controller\dailySpace;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/accueil")
     */
   public function index(){
       return $this->render('index/index.html.twig');
   }

    /**
     * @Route("/categorie/{libelle}",methods={"GET"})
     */
   public function categorie($libelle='test'){
       return $this->render('index/categorie.html.twig');


   }


    /**
     * @param string $article
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/article/{article}",methods={"GET"})
     */
   public function article($article='test2'){
        return $this->render('index/article.html.twig');
   }
}