<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="site_index_nolocale")
     */
    public function indexNoLocale(Request $request): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            '_locale' => 'en'
        ]);
    }
    
    /**
     * @Route(
     *     "/{_locale}/",
     *     name="site_index",
     *     requirements={"_locale":"%supported_locales%"}
     * )
     */
    public function index(Request $request): Response
    {

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);

    }

}
