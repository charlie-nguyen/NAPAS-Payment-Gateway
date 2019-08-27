<?php

namespace Plugin\OSNapas;

use Eccube\Common\EccubeNav;

class Nav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'plugin' => [
                'children' => [
                    'OSNapas' => [
                        'name' => 'napas.admin.config.title',
                        'children' => [
                            'index' => [
                                'name' => 'napas.admin.config.sub_title',
                                'url' => 'os_napas_admin_config',
                            ]
                        ]
                    ],
                ],
            ],
        ];
    }
}
