<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\About;
use App\Entity\Header;
use App\Entity\Service;
use App\Entity\Menu;
use App\Entity\Contact;
use App\Entity\Timetable;
use App\Entity\Category;
use App\Entity\Event;
use App\Entity\PictureMenu;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $header = $this->getDoctrine()
            ->getRepository(Header::class)
            ->findAll();

        $about = $this->getDoctrine()
            ->getRepository(About::class)
            ->findAll();
        
        $service = $this->getDoctrine()
        ->getRepository(Service::class)
        ->findAll();

        $menu = $this->getDoctrine()
        ->getRepository(Menu::class)
        ->findAll();

        $pictureMenu = $this->getDoctrine()
        ->getRepository(PictureMenu::class)
        ->findAll();

        $contact = $this->getDoctrine()
        ->getRepository(Contact::class)
        ->findAll();

        $timetable = $this->getDoctrine()
        ->getRepository(Timetable::class)
        ->findAll();

        return $this->render('index.html.twig', [
            'about' => $about[0], 
            'header' => $header[0],
            'services' => $service,
            'menus'=> $menu,
            'pictureMenu' => $pictureMenu[0], 
            'contact' => $contact[0],
            'timetable' => $timetable
         ]);
    }

    /**
     * @Route("/carte", name="carte")
     */
    public function carte()
    {
        $contact = $this->getDoctrine()
        ->getRepository(Contact::class)
        ->findAll();

        $timetable = $this->getDoctrine()
        ->getRepository(Timetable::class)
        ->findAll();

        $category = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findAll();

        $header = $this->getDoctrine()
        ->getRepository(Header::class)
        ->findAll();

        return $this->render('carte.html.twig', [
            'header' => $header[0],
            'contact' => $contact[0],
            'timetable' => $timetable,
            'categories' => $category
         ]);
    }

    /**
     * @Route("/calendrier", name="event")
     */
    public function event()
    {
        $contact = $this->getDoctrine()
        ->getRepository(Contact::class)
        ->findAll();

        $timetable = $this->getDoctrine()
        ->getRepository(Timetable::class)
        ->findAll();

        $event = $this->getDoctrine()
        ->getRepository(Event::class)
        ->findAll();

        $header = $this->getDoctrine()
        ->getRepository(Header::class)
        ->findAll();

        return $this->render('event.html.twig', [
            'header' => $header[0],
            'contact' => $contact[0],
            'timetable' => $timetable,
            'events' => $event
         ]);
    }

     /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        $contact = $this->getDoctrine()
        ->getRepository(Contact::class)
        ->findAll();

        $timetable = $this->getDoctrine()
        ->getRepository(Timetable::class)
        ->findAll();

        return $this->render('contact.html.twig', [
            'contact' => $contact[0],
            'timetable' => $timetable,
         ]);
    }
 
}