<?php

namespace App\Controller\Admin;

use App\Entity\Service;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class ServiceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Service::class;
    }

  
    public function configureFields(string $pageName): iterable
    {
        return [
          
            TextField::new('title', 'Titre'),
            TextEditorField::new('description'),
            Field::new('iconFile', 'Icon')->setFormType(VichImageType::class)->setTranslationParameters(['form.label.delete'=>'Delete'])->onlyOnForms(),
            ImageField::new('icon')->setBasePath('images/products')->onlyOnIndex(),
        ];
    }
   
}
