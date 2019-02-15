<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Profesor;
use AppBundle\Form\ProfesorType;

class ProfesorController extends Controller
{

    /**
    *@Route("/listProf/", name="listProf")
    */
    public function listaProfAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Profesor::class);
      $Profesor = $repository->findAll();
      return $this->render('profesor/list_profesor.html.twig',array('Profesor' => $Profesor));
    }

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
                        return $this->redirectToRoute('listProf');
                      }

              return $this->render('profesor/update.html.twig', array(
                  'form' => $form->createView(),
              ));
          }
          /**
          * @Route("/deleteProf/{username}", name="deleteProf")
          */
          public function deleteAction($username)
          {
            $form = $this->getDoctrine()->getManager();

            $Profesor = $form->getRepository('AppBundle:Profesor')->find($username);

            if (!$Profesor) {
        return $this->redirectToRoute('listProf');
      }

      $form->remove($Profesor);
      $form->flush();

      return $this->redirectToRoute('listProf');
    }
}
