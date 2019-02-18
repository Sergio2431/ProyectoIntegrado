<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Voluntario;
use AppBundle\Form\VoluntarioType;

class VoluntarioController extends Controller
{

    /**
    *@Route("/listVol/", name="listVol")
    */
    public function listaVolAction(Request $request){
      $repository = $this->getDoctrine()->getRepository(Voluntario::class);
      $Voluntario = $repository->findAll();
      return $this->render('voluntario/list_voluntario.html.twig',array('Voluntario' => $Voluntario));
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

              return $this->render('voluntario/update.html.twig', array(
                  'form' => $form->createView(),
              ));
          }
          /**
          * @Route("/deleteVol/{username}", name="deleteVol")
          */
          public function deleteVAction($username)
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
}
