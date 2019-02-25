<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\UsuariosType;

class ProgramaController extends Controller
{

    /**
     * @Route("/lincadoVol/", name="lincadoVol")
     */
     public function listadoVolAction(Request $request){


       $repository = $this->getDoctrine()->getRepository(Usuarios::class);
       $usuario = $repository->findByTipoUsuario("Voluntario");

       return $this->render('listas/listaProfesor.html.twig',array( 'usuario' => $usuario));
      }
}
