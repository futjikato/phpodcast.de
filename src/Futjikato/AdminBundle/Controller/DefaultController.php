<?php

namespace Futjikato\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FutjikatoAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
