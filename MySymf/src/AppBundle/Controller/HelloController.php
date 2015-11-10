<?php

// src/AppBundle/Controller/HelloController.php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class HelloController extends Controller
	{
		/**
		  * @Route("/hello/{name}", name="hello")
		*/
		public function indexAction($name)
		{
			return $this->render('hello/index.html.twig', array('name' => $name));
		}
}