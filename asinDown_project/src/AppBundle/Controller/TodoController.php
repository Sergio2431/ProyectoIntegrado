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
use AppBundle\Entity\Programa;
use AppBundle\Form\ProgramaType;
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
      $asignatura_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Aula::class);
      $aula_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Programa::class);
      $programa_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Profesor::class);
      $profesor_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Voluntario::class);
      $voluntario_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Alumno::class);
      $alumno_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Voluntario::class);
      $voluntario_todo = $repository->findAll();
      return $this->render('todo/list_todo.html.twig',array('profesor_todo' => $profesor_todo, 'voluntario_todo' => $voluntario_todo, 'alumno_todo' => $alumno_todo, 'asignatura_todo' => $asignatura_todo, 'programa_todo' => $programa_todo, 'aula_todo' => $aula_todo));
    }



  /**
 * @Route("/listadoPrograma/", name="listadoPrograma")
 */
public function listadoPrograma(Request $request)
{
    // replace this example code with whatever you need
    return $this->render('todo/list_todo.html.twig');
}
    /**
    *@Route("/listadoPrograma/", name="listadoPrograma")
    */
    public function listadoProgramaAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Asignatura::class);
      $asignatura_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Aula::class);
      $aula_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Programa::class);
      $programa_todo = $repository->findAll();

      return $this->render('todo/list_todoPrograma.html.twig',array('asignatura_todo' => $asignatura_todo, 'programa_todo' => $programa_todo, 'aula_todo' => $aula_todo));
    }
    /**
   * @Route("/listadoPro/", name="listadoPro")
   */
  public function listado(Request $request)
  {
      // replace this example code with whatever you need
      return $this->render('todo/list_todo.html.twig');
  }
      /**
      *@Route("/listadoPro/", name="listadoPro")
      */
      public function listadoTodoAction(Request $request){


        $repository = $this->getDoctrine()->getRepository(Profesor::class);
        $profesor_todo = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository(Alumno::class);
        $alumno_todo = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository(Voluntario::class);
        $voluntario_todo = $repository->findAll();
        return $this->render('todo/list_todoProfesor.html.twig',array( 'profesor_todo' => $profesor_todo, 'voluntario_todo' => $voluntario_todo, 'alumno_todo' => $alumno_todo));
      }
}
