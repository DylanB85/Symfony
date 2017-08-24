<?php
/**
 * Created by PhpStorm.
 * User: dylan
 * Date: 23/08/2017
 * Time: 18:19
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/index", name="homepage")
     */
    public function indexAction()
    {
        return new Response('Welcome to Symfony!');
    }
}