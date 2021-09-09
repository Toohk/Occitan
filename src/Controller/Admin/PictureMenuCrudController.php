<?php

namespace App\Controller\Admin;

use App\Entity\PictureMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PictureMenuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PictureMenu::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            Field::new('pictureFile', 'Image')->setFormType(VichImageType::class)->setTranslationParameters(['form.label.delete'=>'Delete'])->onlyOnForms(),
            ImageField::new('picture')->setBasePath('images/products')->onlyOnIndex(),
            TextField::new('pictureDesc', 'Description image'),
        ];
    }

}
