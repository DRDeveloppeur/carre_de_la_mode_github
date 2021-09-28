<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Utilisateur')
            ->setEntityLabelInPlural('Utilisateurs')
            ->setPaginatorPageSize(10)
            ->setSearchFields(['firstname', 'lastname', 'email'])
            ->setDefaultSort(['created_at' => 'DESC']);
        ;
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('email')
        ;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('firstname', 'Nom');
        yield EmailField::new('email', 'Adresse e-mail');
        yield FormField::addPanel('Contact information')
            ->setIcon('phone')->addCssClass('optional')
            ->setHelp('Phone number is preferred');
        yield DateTimeField::new('created_at')->onlyOnIndex();
    }
}
