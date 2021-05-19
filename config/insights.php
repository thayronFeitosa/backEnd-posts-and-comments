<?php

declare (strict_types = 1);

return [
    'preset' => 'laravel',
    'ide' => 'vscode',
    'exclude' => [],
    'add' => [
        NunoMaduro\PhpInsights\Domain\Metrics\Architecture\Classes::class => [
            NunoMaduro\PhpInsights\Domain\Insights\ForbiddenFinalClasses::class,
        ],
    ],
    'remove' => [
        SlevomatCodingStandard\Sniffs\TypeHints\DeclareStrictTypesSniff::class,
        SlevomatCodingStandard\Sniffs\TypeHints\DisallowMixedTypeHintSniff::class,
        NunoMaduro\PhpInsights\Domain\Insights\ForbiddenNormalClasses::class,
        NunoMaduro\PhpInsights\Domain\Insights\ForbiddenTraits::class,
        SlevomatCodingStandard\Sniffs\ControlStructures\DisallowEmptySniff::class,
        SlevomatCodingStandard\Sniffs\ControlStructures\DisallowShortTernaryOperatorSniff::class,
        SlevomatCodingStandard\Sniffs\TypeHints\PropertyTypeHintSniff::class,
        SlevomatCodingStandard\Sniffs\TypeHints\DisallowArrayTypeHintSyntaxSniff::class,
        SlevomatCodingStandard\Sniffs\Namespaces\UseSpacingSniff::class,
    ],
    'config' => [
        PHP_CodeSniffer\Standards\Generic\Sniffs\Files\LineLengthSniff::class => [
            'exclude' => [
                'app/Http/Kernel.php',
            ],
        ],
    ],
    'requirements' => [
//        'min-quality' => 0,
//        'min-complexity' => 0,
//        'min-architecture' => 0,
//        'min-style' => 0,
//        'disable-security-check' => false,
    ],
    'threads' => null,
];
