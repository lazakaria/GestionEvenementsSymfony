<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Mapping as ORM;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

 /**
     * @Route("/user")
     */

    
 /**
     * @ORM\Entity(repositoryClass="App\Entity\Utilisateur")
     * @Vich\Uploadable()
     */
class UserController extends AbstractController
{


        /**
         * @route ("/",name="utilisateur_list", defaults={"page":5}, requirements={"page"="\d+"})
         */
        public function list($page=1){
            return new JsonResponse(
                [
                    'page'=>$page,
                    'data'=> self::POSTS
                ]
                );
        }


        /**
         * @route ("/{id}",name="utilisateur_by_id", requirements={"id"="\d+"})
         */
        public function post($id){
            return new JsonResponse(
                self::POSTS[array_search($id,array_column(self::POSTS,'id'))]
            );
        }

         /**
         * @route ("/add",name="user_add", methods={"POST"})
         */
        public function add(request $request){
            $serializer = $this->get('serializer');
            $utilisateur= $serializer->deserialize($request->getContent(),Utilisateur::class,'json');
       $em=$this->getDoctrine()->getManager();
       $em->persist($utilisateur);
       $em->flush();
       return $this->json($utilisateur);
        }

        /**
         * @route ("/del/{id}",name="user_del", methods={"DELETE"})
         */
        public function delete (Utilisateur $del){
         $em=$this->getDoctrine()->getManager();
         $em->remove($del);
         $em->flush();
         return new JsonResponse(null,Response::HTTP_NO_CONTENT);
        }


}



