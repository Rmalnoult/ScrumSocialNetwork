<?php

namespace SM\SSNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SM\SSNBundle\Entity\Post;
use SM\SSNBundle\Entity\PostRepository;
use SM\UserBundle\Entity\User;
use SM\UserBundle\Entity\UserRepository;

use Symfony\Component\HttpFoundation\Request;


class PostController extends Controller
{
    public function postAPostAction()
    {
        $post = new Post();
        // doctrine's syntax to load the post repo
        $postRepository = $this->getDoctrine()
            ->getRepository('SMSSNBundle:Post');

        // create a form to choose a bet    
        $form = $this->createFormBuilder($post)
            ->add('title', 'text', array('label' => ' Titre : '))
            ->add('content', 'text', array('label' => ' Contenu : '))
            ->add('save', 'submit', array('label' => ' OK '))
            ->getForm();

        // get the validated form and handle it
        $request = $this->getRequest();
        $form->handleRequest($request);
        // if form is valid
        if ($form->isValid()) {

            // store title that the user chose
            $postTitle = $post->getTitle();
            // store title  that the user chose
            $postContent = $post->getContent();
            $post->setUsername('Sylvie');
            // get the current user
            $em = $this->getDoctrine()->getManager();

            // flush to update the changes permanently in the database
            $em->persist($post);
            $em->flush();

            return $this->render('SMSSNBundle:Default:index.html.twig');

        }
        // render home page
        return $this->render('SMSSNBundle:Post:postAPost.html.twig', array(
            'form' => $form->createView(),
        )); 
		return $this->render('SMSSNBundle:Post:postAPost.html.twig');	   
    }


}
