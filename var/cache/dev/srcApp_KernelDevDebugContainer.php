<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBIqySPm\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBIqySPm/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBIqySPm.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBIqySPm\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBIqySPm\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'BIqySPm',
    'container.build_id' => 'aeea0db3',
    'container.build_time' => 1543832772,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBIqySPm');
