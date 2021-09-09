<?php

namespace App\Controller\Admin;

use App\Entity\About;
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


class AboutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return About::class;
    }

    
    
    public function configureFields(string $pageName): iterable
    {
        

        $fields = [
            TextField::new('title', 'Titre'),
            TextEditorField::new('content', 'Contenu'),
            Field::new('leftImgFile', 'Image 1, 200x400px')->setFormType(VichImageType::class)->setTranslationParameters(['form.label.delete'=>'Delete'])->onlyOnForms(),
            ImageField::new('leftImg')->setBasePath('images/products')->onlyOnIndex(),
            TextField::new('leftImgDesc', 'Description image'),
            Field::new('rightImgFile', 'Image 2, 200x400px')->setFormType(VichImageType::class)->setTranslationParameters(['form.label.delete'=>'Delete'])->onlyOnForms(),
            ImageField::new('rightImg')->setBasePath('images/products')->onlyOnIndex(),
            TextField::new('rightImgDesc', 'Description image'),
        ];

    

        return $fields;
  
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN)
        ;
    }

}
