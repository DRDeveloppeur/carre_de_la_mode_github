<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
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
            ->setSearchFields(['categoryId', 'marqueId', 'name', 'model', 'price', 'discound', 'discoundV', 'tag'])
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
        yield TextField::new('name');
        yield TextField::new('ref');
        yield AssociationField::new('marque');
        yield AssociationField::new('category');
        yield AssociationField::new('subcategory');
        yield AssociationField::new('sizes');
        yield IntegerField::new('stock');
        yield TextField::new('model');
        yield MoneyField::new('price')->setCurrency('EUR');
        yield IntegerField::new('discound', 'Réduction');
        yield TextField::new('tag');
        yield TextField::new('rayon')->hideOnIndex();
        yield TextField::new('sexe')->hideOnIndex();
        yield TextField::new('departement')->hideOnIndex();
        yield TextField::new('famille')->hideOnIndex();
        yield TextField::new('genre')->hideOnIndex();
        yield TextField::new('attache')->hideOnIndex();
        yield TextField::new('forme')->hideOnIndex();
        yield TextField::new('hauteur')->hideOnIndex();
        yield TextField::new('longueur')->hideOnIndex();
        yield TextField::new('base')->hideOnIndex();
        yield TextField::new('couleur')->hideOnIndex();
        yield TextField::new('matiere')->hideOnIndex();
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
