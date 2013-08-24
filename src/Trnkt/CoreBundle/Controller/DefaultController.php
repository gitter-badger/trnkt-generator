<?php

namespace Trnkt\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrnktCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
