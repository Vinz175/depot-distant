<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX45LbEw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX45LbEw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX45LbEw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX45LbEw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX45LbEw\App_KernelDevDebugContainer([
    'container.build_hash' => 'X45LbEw',
    'container.build_id' => '97a85b6c',
    'container.build_time' => 1654681877,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX45LbEw');
