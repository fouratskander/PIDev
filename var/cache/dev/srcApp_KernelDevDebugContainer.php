<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3PHiMZb\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3PHiMZb/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3PHiMZb.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3PHiMZb\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3PHiMZb\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3PHiMZb',
    'container.build_id' => 'f41612b0',
    'container.build_time' => 1619405289,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3PHiMZb');
