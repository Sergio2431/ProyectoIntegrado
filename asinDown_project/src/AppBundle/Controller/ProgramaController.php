<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Programa;
use AppBundle\Form\ProgramaType;

class ProgramaController extends Controller
{

    /**
    *@Route("/listProg/", name="listProg")
    */
    public function listaProgAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Programa::class);
      $Programa = $repository->findAll();
      return $this->render('programa/list_programa.html.twig',array('Programa' => $Programa));
    }
}
