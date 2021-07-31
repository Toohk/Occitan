<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\About;
use App\Entity\Service;
use App\Entity\Menu;
use App\Entity\Dishe;
use App\Entity\Header;
use App\Entity\Contact;
use App\Entity\Timetable;
use App\Entity\Category;
use App\Entity\Event;
use App\Entity\User;
use App\Entity\PictureMenu;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        if (!$this->getUser()) {
                 return $this->redirectToRoute('app_login');
         }
         $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(DisheCrudController::class)->generateUrl());
        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Occitan');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Entête', 'fas fa-map-marker-alt', Header::class)
            ->setAction('edit')
            ->setEntityId(1);
        yield MenuItem::linkToCrud('A propos', 'fas fa-map-marker-alt', About::class)
            ->setAction('edit')
            ->setEntityId(1);
        yield MenuItem::linkToCrud('Service', 'fas fa-map-marker-alt', Service::class);
        yield MenuItem::linkToCrud('Menu', 'fas fa-map-marker-alt', Menu::class);
        yield MenuItem::linkToCrud('Image Menu', 'fas fa-map-marker-alt', PictureMenu::class)
        ->setAction('edit')
            ->setEntityId(1);
        yield MenuItem::linkToCrud('Information contact', 'fas fa-map-marker-alt', Contact::class)
        ->setAction('edit')
            ->setEntityId(1);

        yield MenuItem::linkToCrud('La carte', 'fas fa-map-marker-alt', Dishe::class);
        
        
        yield MenuItem::linkToCrud('Horraire', 'fas fa-map-marker-alt', Timetable::class);
        yield MenuItem::linkToCrud('Categorie plats', 'fas fa-map-marker-alt', Category::class);
        yield MenuItem::linkToCrud('Evenement', 'fas fa-map-marker-alt', Event::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-map-marker-alt', User::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
