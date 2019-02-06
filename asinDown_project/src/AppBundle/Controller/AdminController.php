<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Alumno;
use AppBundle\Form\AlumnoType;

use AppBundle\Entity\Profesor;
use AppBundle\Form\ProfesorType;

use AppBundle\Entity\Asignatura;
use AppBundle\Form\AsignaturaType;

use AppBundle\Entity\Aula;
use AppBundle\Form\AulaType;

use AppBundle\Entity\Voluntario;
use AppBundle\Form\VoluntarioType;

use AppBundle\Entity\Programa;
use AppBundle\Form\ProgramaType;


use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * AsinDown controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller
{

        /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


                /**
                * @Route("/registroAlumno", name="registroAlumno")
                */
                public function registroAlumnoAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
                {
                    // 1) build the form
                    $user = new Alumno();
                    $form = $this->createForm(AlumnoType::class, $user);
                    // 2) handle the submit (will only happen on POST)
                    $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        // 3) Encode the password (you could also do this via Doctrine listener)
                        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                        $user->setPassword($password);
                        // 4) save the User!
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($user);
                        $entityManager->flush();
                        // ... do any other work - like sending them an email, etc
                        // maybe set a "flash" success message for the user
                        return $this->redirectToRoute('homepage');
                    }
                    return $this->render(
                        'Seguridad/register_alumnos.html.twig',
                        array('form' => $form->createView())
                    );
                }

                /**
                * @Route("/registroProfesor", name="registroProfesor")
                */
                public function registroProfesorAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
                {
                    // 1) build the form
                    $user = new Profesor();
                    $form = $this->createForm(ProfesorType::class, $user);
                    // 2) handle the submit (will only happen on POST)
                    $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        // 3) Encode the password (you could also do this via Doctrine listener)
                        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                        $user->setPassword($password);
                        // 4) save the User!
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($user);
                        $entityManager->flush();
                        // ... do any other work - like sending them an email, etc
                        // maybe set a "flash" success message for the user
                        return $this->redirectToRoute('homepage');
                    }
                    return $this->render(
                        'Seguridad/register_profesores.html.twig',
                        array('form' => $form->createView())
                    );
                }


                /**
                * @Route("/registroVoluntario", name="registroVoluntario")
                */
                public function registroVoluntarioAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
                {
                    // 1) build the form
                    $user = new Voluntario();
                    $form = $this->createForm(VoluntarioType::class, $user);
                    // 2) handle the submit (will only happen on POST)
                    $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        // 3) Encode the password (you could also do this via Doctrine listener)
                        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                        $user->setPassword($password);
                        // 4) save the User!
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($user);
                        $entityManager->flush();
                        // ... do any other work - like sending them an email, etc
                        // maybe set a "flash" success message for the user
                        return $this->redirectToRoute('homepage');
                    }
                    return $this->render(
                        'Seguridad/register_voluntario.html.twig',
                        array('form' => $form->createView())
                    );
                }


                /**
               * @Route("/login", name="login")
               */
              public function loginAction(AuthenticationUtils $authenticationUtils)
              {
                  // get the login error if there is one
                  $error = $authenticationUtils->getLastAuthenticationError();

                  // last username entered by the user
                  $lastUsername = $authenticationUtils->getLastUsername();

                  return $this->render('Seguridad/login.html.twig', array(
                      'last_username' => $lastUsername,
                      'error'         => $error,
                  ));
              }

                /**
                * @Route("/registroAsignatura", name="registroAsignatura")
                */
                public function registroAsignaturaAction(Request $request)
                {
                  // 1) build the form
                  $user = new Asignatura();
                  $form = $this->createForm(AsignaturaType::class, $user);
                  // 2) handle the submit (will only happen on POST)
                  $form->handleRequest($request);
                  if ($form->isSubmitted() && $form->isValid()) {
                      // 4) save the User!
                      $entityManager = $this->getDoctrine()->getManager();
                      $entityManager->persist($user);
                      $entityManager->flush();
                      // ... do any other work - like sending them an email, etc
                      // maybe set a "flash" success message for the user
                      return $this->redirectToRoute('homepage');
                  }
                  return $this->render(
                      'Seguridad/register_asignatura.html.twig',
                      array('form' => $form->createView())
                  );
                }

                /**
                * @Route("/registroAula", name="registroAula")
                */
                public function registroAulaAction(Request $request)
                {
                  // 1) build the form
                  $user = new Aula();
                  $form = $this->createForm(AulaType::class, $user);
                  // 2) handle the submit (will only happen on POST)
                  $form->handleRequest($request);
                  if ($form->isSubmitted() && $form->isValid()) {
                      // 4) save the User!
                      $entityManager = $this->getDoctrine()->getManager();
                      $entityManager->persist($user);
                      $entityManager->flush();
                      // ... do any other work - like sending them an email, etc
                      // maybe set a "flash" success message for the user
                      return $this->redirectToRoute('homepage');
                  }
                  return $this->render(
                      'Seguridad/register_aula.html.twig',
                      array('form' => $form->createView())
                  );
                }

                /**
                * @Route("/registroPrograma", name="registroPrograma")
                */
                public function registroProgramaAction(Request $request)
                {
                  // 1) build the form
                  $user = new Programa();
                  $form = $this->createForm(ProgramaType::class, $user);
                  // 2) handle the submit (will only happen on POST)
                  $form->handleRequest($request);
                  if ($form->isSubmitted() && $form->isValid()) {
                      // 4) save the User!
                      $entityManager = $this->getDoctrine()->getManager();
                      $entityManager->persist($user);
                      $entityManager->flush();
                      // ... do any other work - like sending them an email, etc
                      // maybe set a "flash" success message for the user
                      return $this->redirectToRoute('homepage');
                  }
                  return $this->render(
                      'Seguridad/register_programa.html.twig',
                      array('form' => $form->createView())
                  );
                }         

}

