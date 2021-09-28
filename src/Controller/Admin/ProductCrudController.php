<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PercentField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Produit')
            ->setEntityLabelInPlural('Produits')
            ->setPaginatorPageSize(10)
            ->setSearchFields(['category', 'subCategoryId', 'marqueId', 'name', 'model', 'price', 'discound', 'tagId'])
            ->setDefaultSort(['created_at' => 'DESC']);
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(EntityFilter::new('marque'))
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        // return [
        //     IdField::new('id'),
        //     TextField::new('title'),
        //     TextEditorField::new('description'),
        // ];
        yield TextField::new('ref')->setColumns(2);
        yield TextField::new('name')->setColumns(3);
        yield TextField::new('model')->hideOnIndex()->setColumns(3);
        yield ColorField::new('couleur')->hideOnIndex()->setColumns(1);
        yield FormField::addPanel();
        yield AssociationField::new('marque')->setColumns(3);
        yield AssociationField::new('category')->setColumns(3);
        yield AssociationField::new('subCategory')->setColumns(3);
        yield AssociationField::new('tag')->setColumns(3);
        yield MoneyField::new('price')->setCurrency('EUR')->setColumns(2);
        yield PercentField::new('discound', 'Réduction')->setColumns(1);
        yield TextField::new('rayon')->hideOnIndex()->setColumns(3);
        yield TextField::new('sexe')->hideOnIndex()->setColumns(3);
        yield TextField::new('departement')->hideOnIndex()->setColumns(3);
        yield TextField::new('famille')->hideOnIndex()->setColumns(3);
        yield TextField::new('genre')->hideOnIndex()->setColumns(3);
        yield TextField::new('attache')->hideOnIndex()->setColumns(3);
        yield TextField::new('forme')->hideOnIndex()->setColumns(3);
        yield TextField::new('hauteur')->hideOnIndex()->setColumns(3);
        yield TextField::new('longueur')->hideOnIndex()->setColumns(3);
        yield TextField::new('base')->hideOnIndex()->setColumns(3);
        yield TextField::new('matiere')->hideOnIndex()->setColumns(3);
        yield FormField::addPanel();
        yield TextareaField::new('description')->hideOnIndex();
        yield TextEditorField::new('description')->onlyOnIndex();
        yield DateTimeField::new('created_at')->onlyOnIndex();
        yield DateTimeField::new('updated_at')->onlyOnIndex();
        // yield EmailField::new('model');

        // $createdAt = DateTimeField::new('created_at')->setFormTypeOptions([
        //     'html5' => true,
        //     'years' => range(date('Y'), date('Y') + 5),
        //     'widget' => 'single_text',
        // ])->setValue(new \DateTime());
        // if (Crud::PAGE_EDIT === $pageName) {
        //     yield $createdAt->setFormTypeOption('disabled', true);
        // } else {
        //     yield $createdAt;
        // }
        
    }
}
