<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\UsuariosType;
use AppBundle\Entity\Asignatura;
use AppBundle\Form\AsignaturaType;
use AppBundle\Entity\Aula;
use AppBundle\Form\AulaType;
use AppBundle\Entity\Programa;
use AppBundle\Form\ProgramaType;

class TodoController extends Controller
{
  /**
 * @Route("/listado/", name="listado")
 */
public function listodo(Request $request)
{
    // replace this example code with whatever you need
    return $this->render('todo/listaTodo.html.twig');
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
      return $this->render('listas/listaTodo.html.twig',array('profesor_todo' => $profesor_todo, 'voluntario_todo' => $voluntario_todo, 'alumno_todo' => $alumno_todo, 'asignatura_todo' => $asignatura_todo, 'programa_todo' => $programa_todo, 'aula_todo' => $aula_todo));
    }


  /**
   * @Route("/lincado/", name="lincado")
   */
  public function lincado(Request $request)
  {
      // replace this example code with whatever you need
      return $this->render('listas/links.html.twig');
  }

    /**
    *@Route("/listadoPrograma/", name="listadoPrograma")
    */
    public function listadoProgramaAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Asignatura::class);
      $asignatura_todo = $repository->findAll();
      dump($asignatura_todo);

      $repository = $this->getDoctrine()->getRepository(Aula::class);
      $aula_todo = $repository->findAll();

      $repository = $this->getDoctrine()->getRepository(Programa::class);
      $programa_todo = $repository->findAll();

      return $this->render('listas/listaPrograma.html.twig',array('asignatura_todo' => $asignatura_todo, 'programa_todo' => $programa_todo, 'aula_todo' => $aula_todo));
    }
//ESTA DE AQUI
      /**
      *@Route("/listadoPro/", name="listadoPro")
      */
      public function listadoProfAction(Request $request){


        $repository = $this->getDoctrine()->getRepository(Usuarios::class);
        $usuario = $repository->findByTipoUsuario("Profesor");

        return $this->render('listas/listaProfesor.html.twig',array( 'usuario' => $usuario));
      }



      /**
       * @Route("/lincadoVol/", name="lincadoVol")
       */
       public function listadoVolAction(Request $request){


         $repository = $this->getDoctrine()->getRepository(Usuarios::class);
         $usuario = $repository->findByTipoUsuario("Voluntario");

         return $this->render('listas/listaProfesor.html.twig',array( 'usuario' => $usuario));
        }

        //UPDATES
        /**
        *@Route("/updateProf/{username}", name="updateProf")
        */

        public function ActuaProfAction(Request $request,$username)
            {
              if ($username) {
                $repository = $this->getDoctrine()->getRepository(Profesor::class);
                  $Profesor = $repository->find($username);
                }else {
                  $Profesor = new Profesor();
                }
                // creates a task and gives it some dummy data for this example

                $form = $this->createForm(ProfesorType::class, $Profesor);
                $form->handleRequest($request);

                        if ($form->isSubmitted() && $form->isValid()) {
                            $Profesor = $form->getData();

                            $entityManager = $this->getDoctrine()->getManager();
                            $entityManager->persist($Profesor);
                            $entityManager->flush();
                            return $this->redirectToRoute('listadoPro');
                          }

                  return $this->render('listas/updateProfe.html.twig', array(
                      'form' => $form->createView(),
                  ));
              }
              /**
              *@Route("/updateVol/{username}", name="updateVol")
              */

              public function ActuaVolAction(Request $request,$username)
                  {
                    if ($username) {
                      $repository = $this->getDoctrine()->getRepository(Voluntario::class);
                        $Voluntario = $repository->find($username);
                      }else {
                        $Voluntario = new Voluntario();
                      }
                      // creates a task and gives it some dummy data for this example

                      $form = $this->createForm(VoluntarioType::class, $Voluntario);
                      $form->handleRequest($request);

                              if ($form->isSubmitted() && $form->isValid()) {
                                  $Voluntario = $form->getData();

                                  $entityManager = $this->getDoctrine()->getManager();
                                  $entityManager->persist($Voluntario);
                                  $entityManager->flush();
                                  return $this->redirectToRoute('listadoPro');
                                }

                        return $this->render('litas/updateVol.html.twig', array(
                            'form' => $form->createView(),
                        ));
                    }
        /**
              *@Route("/updateAlumn/{username}", name="updateAlumn")
              */

              public function ActuaAction(Request $request,$username)
                  {
                    if ($username) {
                      $repository = $this->getDoctrine()->getRepository(Alumno::class);
                        $Alumno = $repository->find($username);
                      }else {
                        $Alumno = new Alumno();
                      }
                      // creates a task and gives it some dummy data for this example

                      $form = $this->createForm(AlumnoType::class, $Alumno);
                      $form->handleRequest($request);

                              if ($form->isSubmitted() && $form->isValid()) {
                                  $Alumno = $form->getData();

                                  $entityManager = $this->getDoctrine()->getManager();
                                  $entityManager->persist($Alumno);
                                  $entityManager->flush();
                                  return $this->redirectToRoute('listadoPro');
                                }

                        return $this->render('listas/updateAlumno.html.twig', array(
                            'form' => $form->createView(),
                        ));
                    }
                    //DELETES
              /**
              * @Route("/deleteProf/{username}", name="deleteProf")
              */
              public function deleteProfAction($username)
              {
                $form = $this->getDoctrine()->getManager();

                $Profesor = $form->getRepository('AppBundle:Profesor')->find($username);

                if (!$Profesor) {
            return $this->redirectToRoute('listadoPro');
          }

          $form->remove($Profesor);
          $form->flush();

          return $this->redirectToRoute('listadoPro');
        }

              /**
              * @Route("/deleteVol/{username}", name="deleteVol")
              */
              public function deleteVolAction($username)
              {
                $form = $this->getDoctrine()->getManager();

                $Voluntario = $form->getRepository('AppBundle:Voluntario')->find($username);

                if (!$Voluntario) {
            return $this->redirectToRoute('listadoPro');
          }

          $form->remove($Voluntario);
          $form->flush();

          return $this->redirectToRoute('listadoPro');
        }

              /**
              * @Route("/deleteAlumn/{username}", name="deleteAlumn")
              */
              public function deleteAlumnoAction($username)
              {
                $form = $this->getDoctrine()->getManager();

                $Alumno = $form->getRepository('AppBundle:Alumno')->find($username);

                if (!$Alumno) {
            return $this->redirectToRoute('listadoPro');
          }

          $form->remove($Alumno);
          $form->flush();

          return $this->redirectToRoute('listadoPro');
        }

        /**
       * @Route("/nuevaAsignatura/", name="nuevaAsignatura")
       */
      public function nuevaAsignatura(Request $request)
      {
          // replace this example code with whatever you need
          return $this->render('listas/nuevaAsignatura.html.twig');
      }

      /**
      *@Route("/nuevaAsignatura/", name="nuevaAsignatura")
      */

      public function newAsignatura(Request $request)
      {
          // creates a task and gives it some dummy data for this example
          $nuevo = new Asignatura();
          $form = $this->createForm(AsignaturaType::class, $nuevo);
          $form->handleRequest($request);

                  if ($form->isSubmitted() && $form->isValid()) {
                      $nuevo = $form->getData();

                      $entityManager = $this->getDoctrine()->getManager();
                      $entityManager->persist($nuevo);
                      $entityManager->flush();
                      return $this->redirectToRoute('listadoPrograma');
                    }

                    return $this->render('listas/nuevaAsignatura.html.twig', array(
                      'form' => $form->createView(),
                    ));
                  }
                  /**
                 * @Route("/nuevoPrograma/", name="nuevoPrograma")
                 */
                public function nuevoPrograma(Request $request)
                {
                    // replace this example code with whatever you need
                    return $this->render('listas/nuevoPrograma.html.twig');
                }
                  /**
                  *@Route("/nuevoPrograma/", name="nuevoPrograma")
                  */

                  public function newPrograma(Request $request)
                  {
                    // creates a task and gives it some dummy data for this example
                    $nuevo = new Programa();
                    $form = $this->createForm(ProgramaType::class, $nuevo);
                    $form->handleRequest($request);

                    if ($form->isSubmitted() && $form->isValid()) {
                        $nuevo = $form->getData();

                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($nuevo);
                        $entityManager->flush();

                      }

                      return $this->render('nuevoPrograma.html.twig', array(
                        'form' => $form->createView(),
                      ));
                    }
                    /**
                   * @Route("/nuevaAula/", name="nuevaAula")
                   */
                  public function nuevaAula(Request $request)
                  {
                      // replace this example code with whatever you need
                      return $this->render('listas/nuevaAula.html.twig');
                  }
                    /**
                    *@Route("/nuevaAula/", name="nuevaAula")
                    */

                    public function newAula(Request $request)
                    {
                      // creates a task and gives it some dummy data for this example
                      $nuevo = new Aula();
                      $form = $this->createForm(AulaType::class, $nuevo);
                      $form->handleRequest($request);

                      if ($form->isSubmitted() && $form->isValid()) {
                          $nuevo = $form->getData();

                          $entityManager = $this->getDoctrine()->getManager();
                          $entityManager->persist($nuevo);
                          $entityManager->flush();

                        }

                        return $this->render('nuevaAula.html.twig', array(
                          'form' => $form->createView(),
                        ));
                      }
}
