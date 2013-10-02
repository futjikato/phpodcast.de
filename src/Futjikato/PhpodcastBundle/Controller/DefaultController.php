<?php

namespace Futjikato\PhpodcastBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $assigns = array();



        return $this->render('FutjikatoPhpodcastBundle:Default:index.html.twig', $assigns);
    }
}
