<?php

namespace App\Controller\Admin;

use App\Admin\Field\VichImageField;
use App\Entity\Size;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SizeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Size::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Size')
            ->setEntityLabelInPlural('Size')
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
        yield AssociationField::new('product')->setColumns(3);
        yield TextField::new('size')->setColumns(3);
        yield IntegerField::new('stock')->setColumns(3);
        // yield ImageField::new('pictures', 'Images')
        //     ->setBasePath('uploads/product/')
        //     ->setUploadDir('public/uploads/product/')
        //     ->onlyOnIndex()
        //     ->hideWhenUpdating();
        // yield ImageField::new('pictures')
        //     ->onlyOnForms()
        //     ->hideWhenUpdating()
        //     ->setFormType(VichImageType::class);
        yield VichImageField::new('pictures')
            ->setDownloadUri('public/uploads/product/')
            ->setImageUri('uploads/product/');

        yield DateTimeField::new('created_at', 'Date de création')->onlyOnIndex();
    }
}
