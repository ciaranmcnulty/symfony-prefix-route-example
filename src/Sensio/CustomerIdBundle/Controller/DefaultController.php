<?php

namespace Sensio\CustomerIdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="prefix_test")
     * @Template
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/test2", name="other_test")
     */
    public function otherAction()
    {
        return $this->redirectToRoute('prefix_test');
    }

}
