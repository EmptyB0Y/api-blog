<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG1N7KU4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG1N7KU4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG1N7KU4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG1N7KU4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG1N7KU4\App_KernelDevDebugContainer([
    'container.build_hash' => 'G1N7KU4',
    'container.build_id' => 'e4916bfc',
    'container.build_time' => 1621558958,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG1N7KU4');
