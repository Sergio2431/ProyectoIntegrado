<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Alumno;
use AppBundle\Form\AlumnoType;
use AppBundle\Entity\Asignatura;
use AppBundle\Form\AsignaturaType;
use AppBundle\Entity\Aula;
use AppBundle\Form\AulaType;
use AppBundle\Entity\Profesor;
use AppBundle\Form\ProfesorType;
use AppBundle\Entity\Voluntario;
use AppBundle\Form\VoluntarioType;

class TodoController extends Controller
{
  /**
 * @Route("/listodo/", name="listodo")
 */
public function listodo(Request $request)
{
    // replace this example code with whatever you need
    return $this->render('todo/list_todo.html.twig');
}
    /**
    *@Route("/listodo/", name="listodo")
    */
    public function listaTodoAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Asignatura::class);
      $Asignatura = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Aula::class);
      $aula = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Alumno::class);
      $alumno = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Voluntario::class);
      $voluntario = $repository->findAll();
      return $this->render('todo/list_todo.html.twig',array('voluntario' => $voluntario, 'alumno' => $alumno, 'asignatura' => $Asignatura, 'aula' => $aula));
    }
}
