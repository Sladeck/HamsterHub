<?php

namespace HamsterHubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use EntityBundle\Entity\Videos;
use EntityBundle\Entity\User;

class VideoController extends Controller
{

  public function indexAction($videoId){
      $videos = $this->getDoctrine()
      ->getRepository('EntityBundle:Videos')
      ->findById($videoId);


    return $this->render('HamsterHubBundle:Videos:index.html.twig', array("videos"=> $videos));
  }

  public function uploadAction(Request $info)
  {

    $video = new Videos();

    $url = $info->get("url");
    $name = $info->get("name");
    $description = $info->get("description");

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
       $thumbnail = "http://img.youtube.com/vi/".$cut2[0]."/0.jpg";
      if(count($cut2) == 3){
         $urlCut = $cut1[0].$cut2[0]."?".$cut2[2];
       }
      else if(count($cut2) == 2){
        $cut3 = explode("#", $cut2[1]);
        $urlCut = $cut1[0].$cut2[0]."?".$cut3[0];
      }
       $video->setUrl($urlCut);
       $video->setThumbnail($thumbnail);
       $video->setDescription($description);

     // 4) save the Video!
     $em = $this->getDoctrine()->getManager();
     $em->persist($video);
     $em->flush();
     }

     return new Response('Saved new video with id');

  }

  public function myvideoAction($userName)
  {
    // On recherche l'utilisateur dans la table User
    $user = $this->getDoctrine()
      ->getRepository('EntityBundle:User')
      ->findOneByusername($userName);
      $user_id = $user->getId();
    // On recherche l'id utilisateur à partir de l'ID trouvé haut dessus, et on renvois les vidéos
    $videos = $this->getDoctrine()
      ->getRepository('EntityBundle:Videos')
      ->findByuser(array("user_id"=> $user_id), array("id"=>"desc"));


  return $this->render('HamsterHubBundle:Videos:myVideo.html.twig', array("user"=>$user, "videos"=>$videos));
  }



  public function deleteAction(Request $info){

    $id = $info->get("id");
    $em = $this->getDoctrine()->getManager();
    $delete = $em->find('EntityBundle:Videos', $id);
    $em->remove($delete);
    $em->flush();

    return new Response('Video delete');

  }


}
