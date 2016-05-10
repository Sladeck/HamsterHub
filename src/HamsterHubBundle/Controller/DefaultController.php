<?php

namespace HamsterHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\Videos;
use HamsterHubBundle\Form\UrlType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
      $videos = $this->getDoctrine()
        ->getRepository('EntityBundle:Videos')
        ->findby(array(), array('id' => 'desc'));


      return $this->render('HamsterHubBundle:Default:index.html.twig', array("videos"=> $videos));

    }
}
