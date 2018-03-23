<?php

namespace App\Controller\dailySpace;


use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/accueil")
     */
   public function index(){
       $article=$this->getDoctrine()->getRepository(Article::class)->findAll();
       return $this->render('index/index.html.twig',['articles'=>$article]);
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

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/monCompte",name="compte")
     */
   public function monCompte(){
       return $this->render('Compte/compte.html.twig');
   }
}