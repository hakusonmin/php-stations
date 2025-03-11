<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
  ->setRules([
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_useless_else' => true,
    'ordered_class_elements' => [
      'order' => [
        'use_trait',
        'constant_public',
        'constant_protected',
        'constant_private',
        'property_public',
        'property_protected',
        'property_private',
        'construct',
        'method_public',
        'method_protected',
        'method_private'
      ],
    ]
  ])
  ->setUsingCache(false)
  ->setFinder($finder);
