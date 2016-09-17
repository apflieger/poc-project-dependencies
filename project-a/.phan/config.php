<?php

return [
    'backward_compatibility_checks' => false,
    'quick_mode' => true,
    'analyze_signature_compatibility' => false,
    'directory_list' => [
        'src/',
        'vendor/'
    ],
    "exclude_analysis_directory_list" => [
        'vendor/'
    ],
];