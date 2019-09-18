<?php

namespace Symfony\Bundle\AsseticBundle\Factory;

use Twig\Environment;
use Symfony\Bundle\AsseticBundle\Templating\TemplateNameParser;
use Symfony\Component\HttpKernel\KernelInterface;

class TemplatingFactory {
    
    public static function getLoader(Environment $environment) {
        return $environment->getLoader();
    }
    
    public static function getNameParser(KernelInterface $kernel) {
        return new TemplateNameParser($kernel);
    }
    
}
