<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSN9qhaX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSN9qhaX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSN9qhaX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSN9qhaX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSN9qhaX\App_KernelDevDebugContainer([
    'container.build_hash' => 'SN9qhaX',
    'container.build_id' => 'b81c5732',
    'container.build_time' => 1693841118,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSN9qhaX');