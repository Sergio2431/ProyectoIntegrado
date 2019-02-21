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
 * @Route("api")
 */
class EpiController extends Controller
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




}