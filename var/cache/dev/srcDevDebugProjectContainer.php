<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3XuXiws\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3XuXiws/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3XuXiws.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3XuXiws\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container3XuXiws\srcDevDebugProjectContainer(array(
    'container.build_hash' => '3XuXiws',
    'container.build_id' => 'ef871c6c',
    'container.build_time' => 1542325485,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3XuXiws');
