<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBMHI0TX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBMHI0TX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBMHI0TX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBMHI0TX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBMHI0TX\App_KernelDevDebugContainer([
    'container.build_hash' => 'BMHI0TX',
    'container.build_id' => '03887e98',
    'container.build_time' => 1624612896,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBMHI0TX');
