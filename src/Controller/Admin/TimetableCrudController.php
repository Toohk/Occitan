<?php

namespace App\Controller\Admin;

use App\Entity\Timetable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TimetableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Timetable::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
