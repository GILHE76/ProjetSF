<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 17/05/2018
 * Time: 09:51
 */

namespace App\Controller;
use App\Entity\Mariage;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints\DateTime;


class MariageController extends Controller
{
    /**
     * @Route("/mariage", name="mariage")
     */
    public function index()
    {
        return $this->render('mariage/index.html.twig', [
            'controller_name' => 'MariageController',
        ]);
    }
    /**
     * @Route("/mariage/formulaire", name="mariage_formulaire")
     */
    public function formulaire(Request $requete)
    {
        $mariageform = new mariage();
        $mariageform->setName('jean-claude');
        $mariageform->setDate('dd-mm-yyyy');
        $mariageform->setLieu('lieu');
        $formulaire = $this->createFormBuilder($mariageform)
            ->add('name', TextType::class)
            ->add('date', TextType::class)
            ->add('lieu', TextType::class)
            ->add('envoyer', SubmitType::class, array('label' => "je m'enregistre"))
            ->getForm();

        $formulaire->handleRequest($requete);

        if ($formulaire->isSubmitted() && $formulaire->isValid()) {

            $mariageform = $formulaire->getData();
            return $this->redirectToRoute('mariageformOK');
        }

        return $this->render('mariage/index.html.twig',
            array(
                'formulaire' => $formulaire->createView(),
            ));
    }

    /**
     * @Route("/mariageformOK", name="mariageformOK")
     */

    public function formulaireOK()
    {
        return $this->render('mariage/mariageformOK.html.twig');
    }

}
