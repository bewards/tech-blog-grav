<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/inetpub/wwwroot/grav-skeleton-open-publishing-space-site/system/config/site.yaml',
    'modified' => 1542063373,
    'data' => [
        'title' => 'Grav',
        'default_lang' => 'en',
        'author' => [
            'name' => 'John Appleseed',
            'email' => 'john@example.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'My Grav Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
