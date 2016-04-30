<?php

namespace HamsterHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\Videos;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $url = $this->getDoctrine()
        ->getRepository('EntityBundle:Videos')
        ->findAll();

      return $this->render('HamsterHubBundle:Default:index.html.twig', array("url"=> $url));

      //Pour upload : New videos(); => setuser(getuser()) => persist() => flush();
    }
}
