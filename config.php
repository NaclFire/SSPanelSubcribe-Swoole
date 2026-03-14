<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 站点配置
    |--------------------------------------------------------------------------
    */

    // 站点名称
    'appName' => 'geekSubcribeX',

    // 站点地址
    'baseUrl' => 'https://sspanel',

    // 订阅地址
    'subUrl'  => 'https://sspanel/link/',

    // 单端口多用户混淆参数后缀，可以随意修改，但请保持前后端一致
    'mu_suffix' => 'microsoft.com',

    // 单端口多用户混淆参数表达式，%5m代表取用户特征 md5 的前五位，%id 代表用户id, %suffix 代表上面这个后缀
    'mu_regex' => '%5m%id.%suffix',

    // 不安全中转模式，这个开启之后使用除了 auth_aes128_md5 或者 auth_aes128_sha1 以外的协议地用户也可以设置和使用中转
    'relay_insecure_mode' => false,

    /*
    |--------------------------------------------------------------------------
    | 数据库配置
    |--------------------------------------------------------------------------
    */

    'database' => [
        'driver'    => 'mysql',
        'host'      => '127.0.0.1',
        'port'      => 3306,
        'database'  => 'sspanel',
        'username'  => 'sspanel',
        'password'  => 'sspanel',
        'charset'   => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix'    => ''
    ],

    /*
    |--------------------------------------------------------------------------
    | 订阅配置
    |--------------------------------------------------------------------------
    */

    'SUB' => [

        // 订阅记录
        'Log'      => false,

        // 合并订阅
        'mergeSub' => true,

        // 是否显示到期时间
        'extend' => true,

        // 订阅中的营销信息
        'sub_message'           => [],

        // 关闭 SS/SSR 单端口节点的端口显示
        'disable_sub_mu_port'   => true,

        // 为 SS 节点名称中添加站点名
        'add_appName_to_ss_uri' => false,

        // Clash 默认配置方案
        'Clash_DefaultProfiles'     => 'default',

        // Surge 默认配置方案
        'Surge_DefaultProfiles'     => 'default',

        // Surge2 默认配置方案
        'Surge2_DefaultProfiles'    => 'default',

        // Surfboard 默认配置方案
        'Surfboard_DefaultProfiles' => 'default',
    ],


    /*
    |--------------------------------------------------------------------------
    | 服务配置
    |--------------------------------------------------------------------------
    */

    'SERVER_NAME' => "geekSubcribeX",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT'           => 9501,
        'SERVER_TYPE'    => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE'      => SWOOLE_TCP,
        'RUN_MODEL'      => SWOOLE_PROCESS,
        'SETTING'        => [
            'worker_num'    => 8,
            'reload_async'  => true,
            'max_wait_time' => 3
        ],
        'TASK'           => [
            'workerNum'     => 4,
            'maxRunningNum' => 128,
            'timeout'       => 15
        ]
    ],
    'TEMP_DIR' => null,
    'LOG_DIR'  => null,
    /*
    |--------------------------------------------------------------------------
    | appprofile配置
    |--------------------------------------------------------------------------
    */
    'Surge_Profiles' => [
        'default' => [
            'Checks' => [],
            'General' => [
                'loglevel'                    => 'notify',
                'dns-server'                  => 'system, 117.50.10.10, 119.29.29.29, 223.6.6.6',
                'skip-proxy'                  => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
                'external-controller-access'  => 'China@0.0.0.0:8233',
                'allow-wifi-access'           => 'true',
                'enhanced-mode-by-rule'       => 'false',
                'exclude-simple-hostnames'    => 'true',
                'show-error-page-for-reject'  => 'true',
                'ipv6'                        => 'true',
                'replica'                     => 'false',
                'http-listen'                 => '0.0.0.0:8234',
                'socks5-listen'               => '0.0.0.0:8235',
                'wifi-access-http-port'       => 6152,
                'wifi-access-socks5-port'     => 6153,
                'internet-test-url'           => 'http://wifi.vivo.com.cn/generate_204',
                'proxy-test-url'              => 'http://cp.cloudflare.com',
                'test-timeout'                => 3
            ],
            'Proxy' => [
                '🚀直接连接 = direct'
            ],
            'ProxyGroup' => [
                [
                    'name' => '🔰国外流量',
                    'type' => 'select',
                    'content' => [
                        'regex' => '(.*)',
                        'right-proxies' => [
                            '🚀直接连接'
                        ],
                    ]
                ],
                [
                    'name' => '⚓️其他流量',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量',
                            '🚀直接连接'
                        ]
                    ]
                ],
                [
                    'name' => '✈️Telegram',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Youtube',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Netflix',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬哔哩哔哩',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬国外媒体',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🍎苹果服务',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接',
                            '🔰国外流量'
                        ]
                    ]
                ]
            ],
            'Rule' => [
                'source' => 'surge/default.tpl'
            ]
        ]
    ],
    'Surge2_Profiles'=>[
        'default' => [
            'Checks' => [],
            'General' => [
                'loglevel'                   => 'notify',
                'ipv6'                       => 'true',
                'replica'                    => 'false',
                'dns-server'                 => 'system, 119.29.29.29, 223.5.5.5',
                'skip-proxy'                 => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
                'bypass-system'              => 'true',
                'allow-wifi-access'          => 'true',
                'external-controller-access' => 'ChinaX@0.0.0.0:8233'
            ],
            'Proxy' => [
                '🚀直接连接 = direct'
            ],
            'ProxyGroup' => [
                [
                    'name' => '🔰国外流量',
                    'type' => 'select',
                    'content' => [
                        'regex' => '(.*)',
                        'right-proxies' => [
                            '🚀直接连接'
                        ],
                    ]
                ],
                [
                    'name' => '⚓️其他流量',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量',
                            '🚀直接连接'
                        ]
                    ]
                ],
                [
                    'name' => '✈️Telegram',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Youtube',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Netflix',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬哔哩哔哩',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬国外媒体',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🍎苹果服务',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接',
                            '🔰国外流量'
                        ]
                    ]
                ]
            ],
            'Rule' => [
                'source' => 'surge2/default.tpl'
            ]
        ]
    ],
    'Clash_Profiles'=>[
        'default' => [
            'Checks' => [],
            'General' => [
                'port'                => 7890,
                'socks-port'          => 7891,
                'redir-port'          => 7892,
                'allow-lan'           => false,
                'mode'                => 'rule',
                'log-level'           => 'silent',
                'external-controller' => '0.0.0.0:9090',
                'secret'              => ''
            ],
            'DNS' => [
                'enable'              => true,
                'ipv6'                => false,
                'listen'              => '0.0.0.0:53',
                'enhanced-mode'       => 'fake-ip',
                'fake-ip-range'       => '198.18.0.1/16',
                'nameserver'=>[
                    '114.114.114.114',
                    'tcp://223.5.5.5'
                ],
                'fallback'=>[
                    'tls://223.5.5.5:853',
                    'https://223.5.5.5/dns-query'
                ],
                'fallback-filter'=>[
                    'geoip'=> true,
                    'ipcidr'=>[
                        '240.0.0.0/4'
                    ]
                ]
            ],
            'Proxy' => [],
            'ProxyGroup' => [
                [
                    'name' => '🔰国外流量',
                    'type' => 'select',
                    'content' => [
                        'regex' => '(.*)',
                        'right-proxies' => [
                            '🚀直接连接'
                        ],
                    ]
                ],
                [
                    'name' => '⚓️其他流量',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量',
                            '🚀直接连接'
                        ]
                    ]
                ],
                [
                    'name' => '✈️Telegram',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Youtube',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Netflix',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬哔哩哔哩',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬国外媒体',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🍎苹果服务',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接',
                            '🔰国外流量'
                        ]
                    ]
                ],
                [
                    'name' => '🚀直接连接',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            'DIRECT'
                        ]
                    ]
                ]
            ],
            'Rule' => [
                'source' => 'clash/default.tpl'
            ]
        ]
    ],
    'Surfboard_Profiles' => [
        'default' => [
            'Checks' => [],
            'General' => [
                'loglevel'   => 'notify',
                'dns-server' => 'system, 119.29.29.29, 223.5.5.5',
                'skip-proxy' => '127.0.0.1, 192.168.0.0/16, 10.0.0.0/8, 172.16.0.0/12, 100.64.0.0/10, 17.0.0.0/8, localhost, *.local, *.crashlytics.com',
            ],
            'Proxy' => [
                '🚀直接连接 = direct'
            ],
            'ProxyGroup' => [
                [
                    'name' => '🔰国外流量',
                    'type' => 'select',
                    'content' => [
                        'regex' => '(.*)',
                        'right-proxies' => [
                            '🚀直接连接'
                        ],
                    ]
                ],
                [
                    'name' => '⚓️其他流量',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量',
                            '🚀直接连接'
                        ]
                    ]
                ],
                [
                    'name' => '✈️Telegram',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Youtube',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬Netflix',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬哔哩哔哩',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🚀直接连接'
                        ],
                        'regex' => '(.*)',
                    ]
                ],
                [
                    'name' => '🎬国外媒体',
                    'type' => 'select',
                    'content' => [
                        'left-proxies' => [
                            '🔰国外流量'
                        ],
                        'regex' => '(.*)',
                    ]
                ]
            ],
            'Rule' => [
                'source' => 'surfboard/default.tpl'
            ]
        ]
    ]
];
