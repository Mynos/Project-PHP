<?php

namespace Info\getMoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('getBundle:Default:index.html.twig', array('name' => $name));
    }
}
