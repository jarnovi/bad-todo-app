<?php

namespace teht\todoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tehttodoBundle:Default:index.html.twig', array('name' => $name));
    }
}
