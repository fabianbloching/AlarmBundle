<?php

namespace FB\AlarmBundle;

use FB\AlarmBundle\DependencyInjection\CompilerPass\ResourcesCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FBAlarmBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ResourcesCompilerPass());
    }
}
