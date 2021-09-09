<?php

namespace App\Controller\Admin;

use App\Entity\Dishe;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;


class DisheCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dishe::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextEditorField::new('description'),
            TextField::new('price'),
            AssociationField::new('category'),
            Field::new('pictureFile', 'Image')->setFormType(VichImageType::class)->setTranslationParameters(['form.label.delete'=>'Delete'])->onlyOnForms(),
            ImageField::new('picture')->setBasePath('images/products')->onlyOnIndex(),
            TextField::new('pictureDesc', 'Description image'),
        ];
    }
 
}
