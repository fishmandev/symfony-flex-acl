<?php

namespace App\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('backend/default/index.html.twig');
    }

    /**
     * @Route("/admin/", name="admin")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function adminAction()
    {
        return $this->render('backend/default/admin.html.twig');
    }
}
