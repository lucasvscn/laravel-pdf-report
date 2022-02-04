<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/config',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new PhpCsFixer\Config();

return $config->setFinder($finder)
    ->setRules([
        '@PSR12' => true,
        '@PHP74Migration' => true,
        'no_unused_imports' => true,
        'not_operator_with_successor_space' => true,
        'trailing_comma_in_multiline' => true,
        'unary_operator_spaces' => true,
        'binary_operator_spaces' => true,
        'operator_linebreak' => ['only_booleans' => true],
        'strict_param' => true,
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
        ],
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_var_without_name' => true,
        'single_trait_insert_per_statement' => true,
    ])
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
