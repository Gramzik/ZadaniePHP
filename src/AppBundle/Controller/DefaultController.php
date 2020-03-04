<?php

namespace AppBundle\Controller;

use AppBundle\Form\AddNumbersType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/sequence", name="sequence")
     */
    public function sequenceAction(Request $request)
    {
        $form = $this->createForm(AddNumbersType::class);
        $form->handleRequest($request);

        //check if form was submitted
        if ($form->isSubmitted() && $form->isValid()) {

            function Fibonacci($number)
            {
                if ($number == 1) {
                    return 0;
                } else if ($number == 2) {
                    return 1;
                } else
                    return (Fibonacci($number - 1) +
                        Fibonacci($number - 2));
            }

            $numbers = array_filter($form->getData());
            $result = [];

            foreach ($numbers as $n) {

                if ($n == null) {
                    $result[] = null;
                }
                $result[] = Fibonacci($n);
            }

            return $this->render('/default/result.html.twig', ['numbers' => $numbers, 'results' => $result]);
        }

        return $this->render('default/task.html.twig', ['form' => $form->createView()]);
    }
}
