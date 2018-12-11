<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/inetpub/wwwroot/grav-skeleton-open-publishing-space-site/user/config/plugins/admin.yaml',
    'modified' => 1543268345,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => false,
        'theme' => 'grav',
        'content_padding' => true,
        'twofa_enabled' => true,
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets' => [
            'dashboard-maintenance' => true,
            'dashboard-statistics' => true,
            'dashboard-notifications' => false,
            'dashboard-feed' => false,
            'dashboard-pages' => true
        ],
        'pages' => [
            'show_parents' => 'both'
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true
        ],
        'edit_mode' => 'normal',
        'frontend_pages_target' => '_blank',
        'show_github_msg' => false,
        'pages_list_display_field' => 'title',
        'google_fonts' => true,
        'admin_icons' => 'font-awesome',
        'enable_auto_updates_check' => true,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ],
        'add_modals' => [
            0 => [
                'label' => 'Add Blog Item',
                'blueprint' => 'admin/pages/new_blog_item',
                'show_in' => 'bar'
            ],
            1 => [
                'label' => 'Add Standard Page',
                'blueprint' => 'admin/pages/new_standard_page',
                'show_in' => 'bar'
            ]
        ]
    ]
];
