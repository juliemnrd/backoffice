<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SMSController extends AbstractController
{
    /**
     * @Route("/sms", name="s_m_s")
     */
    public function index()
    {
        return $this->render('sms/index.html.twig', [
            'controller_name' => 'SMSController',
        ]);
    }
}
