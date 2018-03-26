<?php

namespace App\Controller\dailySpace;


use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends Controller
{
    /**
     * @param \Swift_Mailer $mailer
     * @Route("/email")
     */
    public function Newsletter(\Swift_Mailer $mailer){


            //$mail = $this->getDoctrine()->getRepository(Users::class)->Users();
            $message = (new \Swift_Message('Rappel évenement'))
                ->setFrom('contact@dailyspace.com')
                ->setTo('test@gmail.com')
                ->setBody($this->renderView('Email/newsletter.html.twig'));

            $mailer->send($message);
            return $this->render('Email/newsletter.html.twig');

        }

}