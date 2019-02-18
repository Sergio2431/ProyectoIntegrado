<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Alumno;
use AppBundle\Form\AlumnoType;

class AlumnoController extends Controller
{

    /**
    *@Route("/listAlumn/", name="listAlumn")
    */
    public function listaAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Alumno::class);
      $Alumno = $repository->findAll();
      return $this->render('alumno/list_alumnos.html.twig',array('Alumno' => $Alumno));
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

              return $this->render('alumno/update.html.twig', array(
                  'form' => $form->createView(),
              ));
          }
          /**
          * @Route("/deleteAlumn/{username}", name="deleteAlumn")
          */
          public function deleteAction($username)
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
}
