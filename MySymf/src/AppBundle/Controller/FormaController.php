<?php

// src/AppBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Forma;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class FormaController extends Controller
	{
		/**
		  * @Route("/forma")
		*/
		public function indexAction()
		{
			// create a task and give it some dummy data for this example
        $forma = new Forma();


        $form = $this->createFormBuilder($forma)
            ->add('firstName', 'text')
            ->add('secondName', 'text')
            ->add('save', 'submit', array('label' => 'Lets go!'))
            ->getForm();
	
        return $this->render('forma/forma.html.twig', array(
            'form' => $form->createView()));
    }
}