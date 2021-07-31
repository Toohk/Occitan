<?php

namespace App\Controller\Admin;

use App\Entity\Header;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use Vich\UploaderBundle\Form\Type\VichImageType;

class HeaderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Header::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('title', 'Titre'),
            TextField::new('tag', 'Etiquette'),
            Field::new('backgroundFile', 'Image de fond')->setFormType(VichImageType::class)->setTranslationParameters(['form.label.delete'=>'Delete'])->onlyOnForms(),
            ImageField::new('background')->setBasePath('images/products')->onlyOnIndex(),
    
        ];
    }

}
