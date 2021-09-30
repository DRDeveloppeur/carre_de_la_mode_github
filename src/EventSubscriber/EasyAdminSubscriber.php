<?php

namespace App\EventSubscriber;

use App\Entity\Category;
use App\Entity\Marque;
use App\Entity\Product;
use App\Entity\Stock;
use App\Entity\SubCategory;
use App\Entity\User;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $slugger;
    private $security;

    public function __construct(SluggerInterface $slugger, Security $security)
    {
        $this->slugger = $slugger;
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setProductDate'],
        ];
    }

    public function setProductDate(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        $user = $this->security->getUser();
        $now = new DateTime('now');

        if ($entity instanceof Category || $entity instanceof Marque || $entity instanceof Product || $entity instanceof Stock || $entity instanceof SubCategory || $entity instanceof User) {
            $entity->setCreatedAt($now);
        }

    }
}