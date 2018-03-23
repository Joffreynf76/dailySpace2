<?php

namespace App\Controller\dailySpace;


use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
{

    public function Newsletter(\Swift_Mailer $mailer){


            $mail = $this->getDoctrine()->getRepository(Users::class)->Users();
            $message = (new \Swift_message('Rappel évenement'))
                ->setFrom('contact@dailyspace.com')
                ->setTo("$mail")
                ->setBody($this->renderView('Email/newsletter.html.twig'));

            $mailer->send($message);


        }

}