<?php

namespace App\Controller\dailySpace;


use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Evenement;
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
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/systemeSolaire",name="index_systemeSolaire")
     */
   public function systemeSolaire(){
       return $this->render('index/systemeSolaire.html.twig');
   }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/normandie",name="index_normandie")
     */
   public function normandie(){
       return $this->render('index/normandie.html.twig');
   }

    /**
     * @Route("/categorie",name="index_categorie",methods={"GET"})
     */
   public function categorie($libelle='test'){
       $categories=$this->getDoctrine()->getRepository(Categorie::class)->findAll();
       $spotlight=$this->getDoctrine()->getRepository(Article::class)->spotlight();
       return $this->render('index/categorie.html.twig',['categories'=>$categories,'spotlight'=>$spotlight]);


   }

    /**
     * @Route("categorie/{libelle}"
     */
   public function selectCategorie($libelle=''){
       $categorie=$this->getDoctrine()->getRepository(Categorie::class)->findOneBy(['libelle'=>$libelle]);
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


   public function sidebar(){
       $evenements=$this->getDoctrine()->getRepository(Evenement::class)->findLastfive();
       return $this->render('components/sidebar.html.twig',['evenements'=>$evenements]);
   }
}