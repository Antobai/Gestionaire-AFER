<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

class HomeController extends Controller
{
    /**
     * @Route("/", name="Coucou")
     */
    public function indexAction()
{
    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [['Task', 'Hours per Day'],
         ['Work',     11],
         ['Eat',      2],
         ['Commute',  2],
         ['Watch TV', 2],
         ['Sleep',    7]
        ]
    );
    $pieChart->getOptions()->setTitle('My Daily Activities');
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->setis3D(true);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('index.html.twig', array('piechart' => $pieChart));
}

    /**
     * @Route("/testmail", name="mailing")
     */

    public function indexmail(\Swift_Mailer $mailer)
{
    $message = (new \Swift_Message('Hello Email'))
        ->setFrom('benjamin.g@codeur.online')
        ->setTo('benjamin.g@codeur.online')
        ->setBody(
            $this->renderView(
                // templates/emails/registration.html.twig
                'emails/registration.html.twig',
                array('name' => 'coucou')
            ),
            'text/html'
        );

    $mailer->send($message);

    return $this->render('index2.html.twig');
}


    /**
     * @Route("/testautoc", name="autoc")
     */

    public function indexautoc()
{


    $inscription = array(
 
        'date' => '23', 
        'mois' => 'Février', 
        'année' => '2018', 
        'genre' => 'Madame',
        'prenom' => 'Hugo', 
        'nom' => 'Hamon', 
        'adresse' => '19 rue du Tilleul', 
        'codepostal' => '90000',
        'commune' => 'Belfort', 
        'prix' => '150 €', 

    );

    return $this->render('Bulletin_inscription/2018_AFER_Bulletin_d_inscription_Cas_1_et_Cas_2.html.twig', array('inscription' => $inscription));
}

/**
     * @Route("/testinscrip", name="inscrip")
     */

    public function indexinscrip()
{

    $inscrip = array(
 
        'date' => '23', 
        'mois' => 'Février', 
        'année' => '2018', 
        'genre' => 'Madame',
        'prenom' => 'Hugo', 
        'nom' => 'Hamon', 
        'adresse' => '19 rue du Tilleul', 
        'codepostal' => '90000',
        'commune' => 'Belfort', 
        'prix' => '150 €', 

    );

    return $this->render('Bulletin_inscription/2018_AFER_Bulletin_d_inscription_Cas_3_et_Cas_4.html.twig', array('inscription' => $inscrip));
}

/**
     * @Route("/testconvoc", name="convoc")
     */

    public function indexconvoc()
{
    $convocation = array(
 
        'date' => '23', 
        'mois' => 'Février', 
        'année' => '2018', 
        'genre' => 'Madame',
        'prenom' => 'Hugo', 
        'nom' => 'Hamon', 
        'adresse' => '19 rue du Tilleul', 
        'codepostal' => '90000',
        'commune' => 'Belfort', 
        'jour1' => 'lundi', 
        'date1' => '15', 
        'mois1' => '06', 
        'jour2' => 'mardi', 
        'date2' => '16', 
        'mois2' => '06', 
        'année2' => '2018', 

    );

    return $this->render('Convocation/2018_AFER_Convocation.html.twig', array('convocation' => $convocation));
}

/**
     * @Route("/testfact", name="fact")
     */

    public function indexfact()
{
    $facturation = array(
 
        'id' => '01',
        'date' => '23', 
        'mois' => 'Février', 
        'année' => '2018', 
        'genre' => 'Madame',
        'prenom' => 'Hugo', 
        'nom' => 'Hamon', 
        'adresse' => '19 rue du Tilleul', 
        'codepostal' => '90000',
        'commune' => 'Belfort', 
        'date1' => '15', 
        'mois1' => '06', 
        'année1' => '2018', 
        'montantht' => '180 €', 
        'montantttc' => '220 €', 
        'restdu' => '220 €', 


    );

    return $this->render('Facture/2018_AFER_Facturation.html.twig', array('facturation' => $facturation));
}
}
