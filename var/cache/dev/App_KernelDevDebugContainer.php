<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPFxIwkJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPFxIwkJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPFxIwkJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPFxIwkJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPFxIwkJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'PFxIwkJ',
    'container.build_id' => '456635d5',
    'container.build_time' => 1707699057,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPFxIwkJ');