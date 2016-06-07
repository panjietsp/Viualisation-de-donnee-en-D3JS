<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SondageController extends Controller
{
	/**
	 * @Route("/sondage/", name="sondage")
	*/
	public function sondageAction()
	{

		$dir = "csv_resultat_sondage/";
		$a = scandir($dir);
		$path=$a[count($a)-1];
               return $this->render('sondage/sondage.html.twig',array(
                                'path'=>$path));		
		

	}


		
}
