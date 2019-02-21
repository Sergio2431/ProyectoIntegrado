<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends Controller
{
    /**
     * @Route("/calendario", name="calendario")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/calendario.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/programas", name="programas")
     */
    public function programasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/programas.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/personal", name="personal")
     */
    public function personalAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/personal.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/evento", name="evento")
     */
    public function eventoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/evento.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/perfil", name="perfil")
     */
    public function perfilAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/perfil.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/restaurarContraseña", name="restaurarContraseña")
     */
    public function restaurarContraseñaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/restaurarContraseña.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/registerAlumnos", name="registerAlumnos")
     */
    public function registerAlumnosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('seguridad/register_alumnos.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/registerProfesores", name="registerProfesores")
     */
    public function registerProfesoresAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('seguridad/register_profesores.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/registerVoluntarios", name="registerVoluntarios")
     */
    public function registerVoluntariosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('seguridad/register_voluntarios.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/registerAulas", name="registerAulas")
     */
    public function registerAulasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('seguridad/register_aulas.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/registerAsignaturas", name="registerAsignaturas")
     */
    public function registerAsignaturasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('seguridad/register_asignaturas.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/registerProgramas", name="registerProgramas")
     */
    public function registerProgramasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('seguridad/register_programas.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}