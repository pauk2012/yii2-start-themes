<?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use vova07\themes\admin\widgets\Menu;

echo Menu::widget(
    [
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => Yii::t('vova07/themes/admin', 'Dashboard'),
                'url' => Yii::$app->homeUrl,
                'icon' => 'fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Users'),
                'url' => ['/users/default/index'],
                'icon' => 'fa-group',
                'visible' => Yii::$app->user->can('administrateUsers') || Yii::$app->user->can('BViewUsers'),
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Blogs'),
                'url' => ['/blogs/default/index'],
                'icon' => 'fa-book',
                'visible' => Yii::$app->user->can('administrateBlogs') || Yii::$app->user->can('BViewBlogs'),
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Comments'),
                'url' => ['/comments/default/index'],
                'icon' => 'fa-comments',
                'visible' => Yii::$app->user->can('administrateComments') || Yii::$app->user->can('BViewCommentsModels') || Yii::$app->user->can('BViewComments'),
                'items' => [
                    [
                        'label' => Yii::t('vova07/themes/admin', 'Comments'),
                        'url' => ['/comments/default/index'],
                        'visible' => Yii::$app->user->can('administrateComments') || Yii::$app->user->can('BViewComments'),
                    ],
                    [
                        'label' => Yii::t('vova07/themes/admin', 'Models management'),
                        'url' => ['/comments/models/index'],
                        'visible' => Yii::$app->user->can('administrateComments') || Yii::$app->user->can('BViewCommentsModels'),
                    ]
                ]
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Classes'),
                'url' => ['/klasses/default/index'],
                'icon' => 'fa-calendar',
                'visible' => Yii::$app->user->can('administrateKlasses') || Yii::$app->user->can('BViewKlasses'),
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Accounts'),
                'url' => ['/accounts/default/index'],
                'icon' => 'fa-building-o',
                'visible' => Yii::$app->user->can('administrateAccounts') || Yii::$app->user->can('BViewTrainers'),
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Trainers'),
                'url' => ['/trainers/default/index'],
                'icon' => 'fa-male',
                'visible' => Yii::$app->user->can('administrateTrainers') || Yii::$app->user->can('BViewTrainers'),
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Halls'),
                'url' => ['/halls/default/index'],
                'icon' => 'fa-map-marker',
                'visible' => Yii::$app->user->can('administrateHalls') || Yii::$app->user->can('BViewHalls'),
            ],
            [
                'label' => Yii::t('vova07/themes/admin', 'Translations'),
                'url' => ['/i18n/default/index'],
                'icon' => 'fa-language',
                'visible' => true// Yii::$app->user->can('administrateHalls') || Yii::$app->user->can('BViewHalls'),
            ],


            [
                'label' => Yii::t('vova07/themes/admin', 'Access control'),
                'url' => '#',
                'icon' => 'fa-gavel',
                'visible' => Yii::$app->user->can('administrateRbac') || Yii::$app->user->can('BViewRoles') || Yii::$app->user->can('BViewPermissions') || Yii::$app->user->can('BViewRules'),
                'items' => [
                    [
                        'label' => Yii::t('vova07/themes/admin', 'Permissions'),
                        'url' => ['/rbac/permissions/index'],
                        'visible' => Yii::$app->user->can('administrateRbac') || Yii::$app->user->can('BViewPermissions')
                    ],
                    [
                        'label' => Yii::t('vova07/themes/admin', 'Roles'),
                        'url' => ['/rbac/roles/index'],
                        'visible' => Yii::$app->user->can('administrateRbac') || Yii::$app->user->can('BViewRoles')
                    ],
                    [
                        'label' => Yii::t('vova07/themes/admin', 'Rules'),
                        'url' => ['/rbac/rules/index'],
                        'visible' => Yii::$app->user->can('administrateRbac') || Yii::$app->user->can('BViewRules')
                    ]
                ]
            ],
        ]
    ]
);