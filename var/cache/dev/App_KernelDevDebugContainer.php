<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJJJ5xZS\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJJJ5xZS/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJJJ5xZS.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJJJ5xZS\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJJJ5xZS\App_KernelDevDebugContainer([
    'container.build_hash' => 'JJJ5xZS',
    'container.build_id' => '9da75212',
    'container.build_time' => 1632476646,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJJJ5xZS');
