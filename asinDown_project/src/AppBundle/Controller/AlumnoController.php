<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Alumno;
use AppBundle\Form\AlumnoType;

class AlumnoController extends Controller
{

    /**
    *@Route("/list/", name="list")
    */
    public function listaAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Alumno::class);
      $Alumno = $repository->findAll();
      return $this->render('alumno/list_alumnos.html.twig',array('Alumno' => $Alumno));
    }

    /**
    *@Route("/update/{username}", name="update")
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
                        return $this->redirectToRoute('list');
                      }

              return $this->render('alumno/nuevo.html.twig', array(
                  'form' => $form->createView(),
              ));
          }
          /**
          * @Route("/delete/{username}", name="delete")
          */
          public function deleteAction($username)
          {
            $form = $this->getDoctrine()->getManager();

            $Alumno = $form->getRepository('AppBundle:Alumno')->find($username);

            if (!$Alumno) {
        return $this->redirectToRoute('list');
      }

      $form->remove($Alumno);
      $form->flush();

      return $this->redirectToRoute('list');
    }
}
