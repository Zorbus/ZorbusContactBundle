<?php

namespace Zorbus\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZorbusContactBundle:Default:index.html.twig', array('name' => $name));
    }
}
