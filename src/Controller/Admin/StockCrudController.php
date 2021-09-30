<?php

namespace App\Controller\Admin;

use App\Entity\Stock;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StockCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stock::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Stock')
            ->setEntityLabelInPlural('Stock')
            ->setPaginatorPageSize(10)
            ->setSearchFields(['value', 'product.id', 'product.name', 'product.ref', 'size'])
            ->setDefaultSort(['id' => 'DESC']);
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('value')
            ->add('product')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('product', 'Produit')->setColumns(3);
        yield IntegerField::new('value', 'En stock')->setColumns(3);
        yield TextField::new('size', 'Taille')->setColumns(3);
        yield DateTimeField::new('created_at', 'Date de création')->onlyOnIndex();
    }
}
