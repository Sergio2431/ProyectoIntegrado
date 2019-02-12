<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Aula;
use AppBundle\Form\AulaType;

class AulaController extends Controller
{

    /**
    *@Route("/listAula/", name="lista")
    */
    public function listaAulaAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Aula::class);
      $Aula = $repository->findAll();
      return $this->render('aula/list_aula.html.twig',array('Aula' => $Aula));
    }
}
