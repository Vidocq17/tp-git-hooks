<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
    ->exclude('vendor')
    ->notPath('public/index.php')
    ->notPath('config/preload.php')
    ->notPath('config/reference.php')
    ->notPath('tests/bootstrap.php');

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
    ])
    ->setFinder($finder)
;
