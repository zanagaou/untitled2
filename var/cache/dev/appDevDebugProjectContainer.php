<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXuxwwgo\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXuxwwgo/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXuxwwgo.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXuxwwgo\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXuxwwgo\appDevDebugProjectContainer([
    'container.build_hash' => 'Xuxwwgo',
    'container.build_id' => '4d005af0',
    'container.build_time' => 1584884234,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXuxwwgo');