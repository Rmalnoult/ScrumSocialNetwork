<?php

namespace SM\SSNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SM\SSNBundle\Entity\Post;
use SM\SSNBundle\Entity\PostRepository;


class DefaultController extends Controller
{
    public function homeAction()
    {
        
        // return $this->render('SMSSNBundle:Default:index.html.twig');

    	//display all posts
    	$postRepository = $this->getDoctrine()
    	    ->getRepository('SMSSNBundle:Post');
		$posts = $postRepository->findAll();




        $variablesToRender = array(
                'posts' =>  $posts,
                );	


		return $this->render('SMSSNBundle:Default:allPostsOnHomepage.html.twig', $variablesToRender);
    }


}
