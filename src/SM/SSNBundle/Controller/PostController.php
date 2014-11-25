<?php

namespace SM\SSNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    public function postAPostAction()
    {
        return $this->render('SMSSNBundle:Post:postAPost.html.twig', array(
                // ...
            ));    
    },
    public function displayAllPosts()
    {
    	
    }

}
