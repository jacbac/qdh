<?php
/**
 * Created by PhpStorm.
 * User: Jerome
 * Date: 25/11/13
 * Time: 11:13
 */

namespace Qd\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Qd\BlogBundle\Entity\Enquiry;
use Qd\BlogBundle\Form\EnquiryType;

class BlogController extends Controller
{
    public function indexAction()
    {
        if (!$date = $this->getRequest()->getSession()->get('date')) {
            $date = $this->donneDate();
        }

        return $this->render('QdBlogBundle:Blog:index.html.twig', array('date' => $date));
    }

    private function donneDate()
    {
        // on prend la date du jour
        $today = new \DateTime('today');
        // on enlève 100 ans et on adapte le format
        $today->sub(new \DateInterval('P100Y'));

        // on verifie et oncorrrige si nécessaire la date
        $date = $this->verifDate($today);
        $madate = $date->format('Y-m-d');

        // on met la date en variable de session
        $session = $this->getRequest()->getSession();
        $session->set('date', $date);
        $session->set('madate', $madate);

        return $date;
    }

    private function donneJournaux($madate)
    {
        $em = $this->getDoctrine()->getManager();

        $repo = $em->getRepository('QdBlogBundle:Articles');
        $journaux = $repo->findByDateparution($madate);

        return $journaux;

    }

    private function donneChrono($madate)
    {
        $chronos =  $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Chrono')
            ->myFindByChrono($madate);

        return $chronos;
    }
    private function donneEvenements($madate)
    {
        $evenements =  $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Chrono')
            ->myFindByEvents($madate);

        return $evenements;
    }

    private function donnePhotos()
    {
        $photos['pays'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctPays();
        $photos['region'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctRegion();
        $photos['dpt'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctDpt();
        $photos['com'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctCom();
        $photos['autp'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctAutp();
        $photos['autoeu'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctAutoeu();
        $photos['serie'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Opendata')
            ->myDistinctSerie();

        return $photos;
    }

    private function donneDatas($madate)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('QdBlogBundle:Opendata');
        $datas = $repo->findBy(array('datepv' =>$madate), array('datepv' =>'desc'), 3, 0);

        return $datas;
    }

    private function donneListeschronos()
    {
        $listesChronos =  $this->getDoctrine()
            ->getManager()
            ->getRepository('QdBlogBundle:Chrono')
            ->myFindByAll();

        return $listesChronos;
    }
    private function donneTags()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('QdBlogBundle:Tags');
        $tags = $repo->findAll();

        return $tags;
    }

    private function verifDate($date)
    {
        if ($date->format('Y-m-d') < '1914-08-01') {
            $date = new \DateTime('1914-08-01');
        } elseif ($date->format('Y-m-d') > '1918-11-11') {
            $date = new \DateTime('1918-11-11');
        }

        return $date;
    }

    public function dateAction()
    {
        $date = $this->getRequest()->getSession()->get('date');
        $madate = $date->format('Y-m-d');

        return $this->render('QdBlogBundle:Blog:date.html.twig', array('madate' => $madate));
    }

    public function journauxAction()
    {
        $journaux = $this->donneJournaux($this->getRequest()->getSession()->get('madate'));

        return $this->render('QdBlogBundle:Blog:journaux.html.twig', array('articles' => $journaux));
    }

    public function chronoAction()
    {
        $madate = $this->getRequest()->getSession()->get('madate');
        $chronos = $this->donneChrono($madate);
        $evenements = $this->donneEvenements($madate);

        return $this->render('QdBlogBundle:Blog:chrono.html.twig', array('chronos' => $chronos, 'evenements' => $evenements));
    }

    public function dataAction()
    {
        $date = $this->getRequest()->getSession()->get('date');
        $datas = $this->donneDatas($this->getRequest()->getSession()->get('madate'));

        return $this->render('QdBlogBundle:Blog:data.html.twig', array('datas' => $datas, 'date' => $date));
    }

    public function blogAction()
    {
        $session = $this->getRequest()->getSession();
        if ($session->get('date') == null) {
            $date = $this->donneDate();
        } else {
            if ($action = $this->getRequest()->get('action')) {
                $date = $session->get('date');
                if ($action != 'today') {
                    $tabdate = $this->container->getParameter('tabdate');
                    $modif = $tabdate[$action];
                    $date->modify($modif);
                }
            } else {
                $date = $session->get('date');
            }
        }

        $date = $this->verifDate($date);
        $session->set('date', $date);
        $madate = $date->format('Y-m-d');
        $session->set('madate', $madate);

        return $this->render('QdBlogBundle:Blog:blog.html.twig');

    }

    public function menuAction()
    {
        if (!$date = $this->getRequest()->getSession()->get('date')) {
            $date = $this->donneDate();
        }

        $date = $this->getRequest()->getSession()->get('date');
        $madate = $this->getRequest()->getSession()->get('madate');

        $liste = array(
            array('id' => 4, 'title' => $date,                   'url' => 'qd_blog_blog'),
            array('id' => 5, 'title' => 'Listes Chronologiques', 'url' => 'qd_blog_lstchrono'),
            array('id' => 6, 'title' => 'Photos',                'url' => 'qd_blog_photos'),
        );

        return $this->render('QdBlogBundle:Blog:menu.html.twig', array('liste_menu' => $liste));
    }

    public function lstchronoAction()
    {
        if (!$date = $this->getRequest()->getSession()->get('date')) {
            $date = $this->donneDate();
        }
        $listesChronos = $this->donneListeschronos();
        $tags = $this->donneTags();

        return $this->render('QdBlogBundle:Blog:lstchrono.html.twig', array('chronos' => $listesChronos, 'tags' => $tags));

    }

    public function photosAction()
    {
        if (!$date = $this->getRequest()->getSession()->get('date')) {
            $date = $this->donneDate();
        }
        $tabCatPhoto = $this->container->getParameter('tabCatPhoto');

        $photos = $this->donnePhotos();
        if ($cate = $this->getRequest()->get('cat') && $req = $this->getRequest()->get('req')) {

            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository('QdBlogBundle:Opendata');
            $result =  $repo->myFindByReq($cate, $req);
        } else {
            $cate = '';
            $req = '';
            $result = '';
        }

        return $this->render('QdBlogBundle:Blog:photos.html.twig', array(
            'tabCatPhoto' => $tabCatPhoto,
            'photos'      => $photos,
            'cate'        => $cate,
            'req'         => $req,
            'result'      => $result
        ));
    }

    public function voirAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('QdBlogBundle:Carnet');
        $carnet = $repository->find($id);

        return $this->render('QdBlogBundle:Blog:voir.html.twig', array('carnet' => $carnet));
    }

    public function soldatAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('QdBlogBundle:Soldat');
        $soldat = $repo->findById($id);
        $datenais = $this->verifOldDate($soldat[0]->getDatenais());

        //$sd = $sd->format('Y-m-d');
        //var_dump($sd);
        return $this->render('QdBlogBundle:Blog:soldat.html.twig', array('soldat' => $soldat, 'datenais' => $datenais));
    }

    public function batailleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('QdBlogBundle:Bataille');
        $bataille = $repo->findById($id);
        //$datenais = $this->verifOldDate($soldat[0]->getDatenais());
        return $this->render('QdBlogBundle:Blog:bataille.html.twig', array('bataille' => $bataille));
    }

    private function verifOldDate($date)
    {
        $sd = new \DateTime($date);
        $datenais = null;
        if ($sd->format("Y-m-d") <= ("1901-11-31")) {
            $tabMonth = array(
                '01' => 'Janv',
                '02' => 'Fév',
                '03' => 'Mars',
                '04' => 'Avril',
                '05' => 'Mai',
                '06' => 'Juin',
                '07' => 'Juil',
                '08' => 'Août',
                '09' => 'Sept',
                '10' => 'Oct',
                '11' => 'Nov',
                '12' => 'Déc'
            );
            $month = $tabMonth[$sd->format("m")];
            $datenais = $sd->format("d").' '.$month. ' '.$sd->format("Y");
        }

        return $datenais;
    }

    public function ajouterAction()
    {
        $carnet = new Carnet();

        $carnet->setDate('29/09/1916');
        $carnet->setAuteur('soldat');
        $carnet->setTexte('Mercredi 29 septembre 1915
Ma chère Louisette,
Je t\'ai promis, presque solennellement, de te dire la vérité ; je vais m\'exécuter, mais en revanche tu m\'as donné l\'assurance que tu aurais les nerfs solides et le coeur ferme.
Je suis depuis ce matin dans des tranchées conquises depuis 2 jours, l\'ensemble de ces tranchées et boyaux forme un véritable "labyrinthe", où j\'ai erré 3 heures cette nuit, absolument perdu. Les traces de la lutte ardente y sont nombreuses et saisissantes ; et d\'abord elles sont plus qu\'à moitié détruites par l\'ouragan de mitraille que notre artillerie y a lancé, aussi sont-elles incommodes et horriblement sâles malgré les réparations urgentes que nous y avons faites ; tout y manque : l\'eau (propre ou sale), les boyaux, les latrines ; elles sont à moins de 200 mètres de la 1ère ligne ennemie, avec laquelle elles communiquent par des boyaux obturés ; elles sont parsemées de cadavres français et allemands ; sans presque me déranger j\'en compte bien 20 figés dans les attitudes les plus macabres. Ce voisinage n\'est pas encore nauséabond, mais il fait tout de même mal aux yeux ; ce matin, à 5 heures, nous arrivons mouillés et harassés, et j\'entre dans le premier abri venu pour me détendre, j\'avise une bonne planche, m\'y étends, la trouve moelleuse, mais 5 minutes après je m\'aperçois qu\'elle fait sommier sur 2 cadavres allemands ; et bien, crois-moi, ça fait tout de même quelque chose, au moins la 1ère fois. On marmite fort tout autour de nous et vraiment c\'est parfois un vacarme ; déjà je ne salue presque plus.
Le mal n\'est pas là ; il est surtout dans le temps qui est affreux ; depuis 3 jours au moins, les rafales de pluie succèdent aux averses ; les boyaux sont des fondrières inommables, où l\'on glisse, où l\'on se crotte affreusement ; aussi suis-je sâle au superlatif, au moins jusqu\'à la ceinture ; mes mains sont boueuses et les resteront jusqu\'au départ ; mes souliers sont pleins d\'eau ; heureusement le corps est sec, car l\'air est presque froid et le ciel livide. Autour de moi les gens font une tête ! Il nous faudra beaucoup de patience et de moral.');
        $carnet->setRemerciement('Avec l\'aimable autorisation de la famille du soldat');

        $em= $this->getDoctrine()->getManager();
        $em->persist($carnet);
        $em->flush();

        if ($this->getRequest()->getMethod() == 'POST') {
            $this->get('session')->getFlashBag()->add('carnet enregistré');

            return $this->redirect($this->generateUrl('QdBlogBundle:Blog:voir.html.twig', array('id' => $carnet->getId())));
        }

        return $this->render('QdBlogBundle:Blog:ajouter.html.twig');
    }

    public function mentionsAction()
    {
        return $this->render('QdBlogBundle:Blog:mentions.html.twig');
    }

    public function contactAction()
    {
        //http://www.foulquier.info/tutoriaux/symfony2-creation-dune-page-statique-contact-avec-un-formulaire-des-validateurs-et-envoi-demails/

        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Message du UnJourEn14')
                    ->setFrom('toto@titi.fr')
                    ->setTo($this->container->getParameter('qd_blog.emails.contact_email'))
                    ->setBody($this->renderView('QdBlogBundle:Blog:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->container->get('mailer')->send($message);

                $this->container->get('session')->getFlashBag()->Add('notice', 'Votre message a été envoyé, merci !');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('qd_blog_contact'));
            }
        }

        return $this->render('QdBlogBundle:Blog:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
