<?php

// src/AppBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use AppBundle\Form\FormaType;
use AppBundle\Entity\Forma;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class FormaController extends Controller
	{
		/**
		  * @Route("/forma", name="forma")
		
		*/
		public function formaAction()
		{
			// create a task and give it some dummy data for this example
        $forma = new Forma();
		$form = $this->createForm(new FormaType(), $forma);
	//	return $this->redirect($this->generateUrl('forma_show'));
        return $this->render('forma/index.html.twig', array(
            'form' => $form->createView()));
    }
		/**
		  * @Route("/forma/show", name="forma_show")
			
		*/
		public function showForma(){
			$ss = 5;
			return $this->render('forma/show.html.twig', array(
            'numb' => $ss));
		}
}