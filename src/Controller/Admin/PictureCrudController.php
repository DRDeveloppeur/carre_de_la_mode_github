<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class PictureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Picture::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Image')
            ->setEntityLabelInPlural('Images')
            ->setPaginatorPageSize(10)
            ->setSearchFields(['productId', 'name'])
            ->setDefaultSort(['id' => 'DESC']);
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('product')
            ->add('name')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('product', 'Produit')->setColumns(3);
        yield ImageField::new('name', 'Image')
            ->setBasePath('uploads/product/')
            ->setUploadDir('public/uploads/product')
            ->setCustomOption('multiple', true)
            // ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->hideWhenUpdating();
        yield DateTimeField::new('created_at', 'Date de création')->onlyOnIndex();
    }
}
