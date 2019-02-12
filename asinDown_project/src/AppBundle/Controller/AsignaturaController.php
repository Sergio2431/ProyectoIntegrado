<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Asignatura;
use AppBundle\Form\AsignaturaType;

class AsignaturaController extends Controller
{

    /**
    *@Route("/listAsig/", name="listAsig")
    */
    public function listaAsigAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Asignatura::class);
      $Asignatura = $repository->findAll();
      return $this->render('asignatura/list_asignatura.html.twig',array('Asignatura' => $Asignatura));
    }
}
