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
		$form = $this->createCreateForm($forma);
	//	return $this->redirect($this->generateUrl('forma_show'));
        return $this->render('forma/index.html.twig', array(
            'form' => $form->createView()));
		}
		
		/**
		 * Creates a form to create a Forma entity.
		 *
		 * @param Forma $forma The forma
		 */
		private function createCreateForm(Forma $forma)
		{
			$form = $this->createForm(new FormaType(), $forma);
			return $form;
		}
		
		  /**
		  * @Route("/forma/show", name="forma_show")
		  */
		public function showaction(Request $request){
			$ss = $request->request->get('forma');
			$First = $ss['firstName'];
			$Second = $ss['secondName'];
			return $this->render('forma/show.html.twig', array(
			'first' => $First,
            'second' => $Second));
		}
}