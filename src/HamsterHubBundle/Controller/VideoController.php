<?php

namespace HamsterHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use EntityBundle\Entity\Videos;
use EntityBundle\Entity\User;

class VideoController extends Controller{

  public function uploadAction(Request $info)
  {

    $video = new Videos();

    $url = $info->get("url");
    $name = $info->get("name");

    $video->setUrl($url);
    $video->setName($name);
    $video->setDate(new \DateTime(date('Y-m-d')));
    $video->setUser($this->getUser());

     // 3) Cut URL
     $urlCut = $url;
     $cut1 = explode("v=", $urlCut);
     if(count($cut1) == 2){
       $cut1[0] = "https://www.youtube.com/embed/";
       $cut2 = explode("&", $cut1[1]);
       $urlCut = $cut1[0].$cut2[0];
       var_dump($urlCut);

      if(count($cut2) == 3){
         $urlCut = $cut1[0].$cut2[0]."?".$cut2[2];
       }
      else if(count($cut2) == 2){
        $cut3 = explode("#", $cut2[1]);
        $urlCut = $cut1[0].$cut2[0]."?".$cut3[0];
      }
       $video->setUrl($urlCut);

     // 4) save the Video!
     $em = $this->getDoctrine()->getManager();
     $em->persist($video);
     $em->flush();
     }

     return new Response('Saved new video with id');

  }



  public function deleteAction(Request $info){

    $id = $info->get("id");
    var_dump($id);
    $em = $this->getDoctrine()->getManager();
    $delete = $em->find('EntityBundle:Videos', $id);
    $em->remove($delete);
    $em->flush();

    return new Response('Video delete');

  }


}
