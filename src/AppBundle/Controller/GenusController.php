<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 05.05.2018
 * Time: 22:36
 */

namespace AppBundle\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName) {
        return $this->render('genus/show.html.twig', [
            'name' => $genusName
        ]);
    }
}