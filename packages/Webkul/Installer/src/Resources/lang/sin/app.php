<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'පෙරනිමවේ',
            ],

            'attribute-groups' => [
                'description'       => 'විස්තර',
                'general'           => 'සාමානේඉ',
                'inventories'       => 'වෘක්ත',
                'meta-description'  => 'මැටා වෘක්ත',
                'price'             => 'මිල',
                'shipping'          => 'නාශීලන',
                'settings'          => 'සැකසොක්ක',
            ],

            'attributes' => [
                'brand'                => 'සීනික',
                'color'                => 'වර්ණ',
                'cost'                 => 'පිරතූ',
                'description'          => 'විස්තර',
                'featured'             => 'විභඟය',
                'guest-checkout'       => 'මෘදු වට්ටක්',
                'height'               => 'උඹට',
                'length'               => 'දුරක්කට',
                'meta-title'           => 'මැටා මාළු',
                'meta-keywords'        => 'මැටා මාළු වල',
                'meta-description'     => 'මැටා වෘක්ත',
                'manage-stock'         => 'වෘක්ත කළමනාක්ක',
                'new'                  => 'නව',
                'name'                 => 'නම',
                'product-number'       => 'නිෂ්කල අංකය',
                'price'                => 'මිල',
                'sku'                  => 'SKU කේඑ',
                'status'               => 'තත්ත්වක්',
                'short-description'    => 'කොදු විස්තර',
                'special-price'        => 'විාළු මිල',
                'special-price-from'   => 'විාළු මිල සිට',
                'special-price-to'     => 'විාළු මිල දක්වා',
                'size'                 => 'ප්රමාණක්',
                'tax-category'         => 'බද කටක්',
                'url-key'              => 'URL යතුර',
                'visible-individually' => 'ප්රභේදනවක්',
                'width'                => 'පළල',
                'weight'               => 'බර',
            ],

            'attribute-options' => [
                'black'  => 'කළු',
                'green'  => 'කොළ',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'රතු',
                's'      => 'S',
                'white'  => 'සුව',
                'xl'     => 'XL',
                'yellow' => 'කහු',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'මූලාශ්ර විස්තර',
                'name'        => 'මූලා',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'අපි අපිටාළ විස්තර',
                    'title'   => 'අපි',
                ],

                'refund-policy' => [
                    'content' => 'ණපොක් පොක්ක විස්තර',
                    'title'   => 'ණපොක් පොක්ක',
                ],

                'return-policy' => [
                    'content' => 'පිාක්ක පොක්ක විස්තර',
                    'title'   => 'පිාක්ක පොක්ක',
                ],

                'terms-conditions' => [
                    'content' => 'භොක්ක සහේ කොකේකොදත්',
                    'title'   => 'භොක්ක සහේ කොකේකොදත්',
                ],

                'terms-of-use' => [
                    'content' => 'භොක්ක සහේ භොක්කේකොදත්',
                    'title'   => 'භොක්ක සහේ භොක්කේකොදත්',
                ],

                'contact-us' => [
                    'content' => 'අපි සීමා විස්තර',
                    'title'   => 'අපි',
                ],

                'customer-service' => [
                    'content' => 'පොක්කභොක්කභොක්ක විස්තර',
                    'title'   => 'පොක්කභොක්කභොක්ක',
                ],

                'whats-new' => [
                    'content' => 'නොක්කොදත් පොක්කොදත්',
                    'title'   => 'නොක්ක',
                ],

                'payment-policy' => [
                    'content' => 'ණපොක් පොක්ක විස්තර',
                    'title'   => 'ණපොක් පොක්ක',
                ],

                'shipping-policy' => [
                    'content' => 'නාශීලන පොක්ක විස්තර',
                    'title'   => 'නාශීලන පොක්ක',
                ],

                'privacy-policy' => [
                    'content' => 'පුරුෂනා පොක්කොදත්',
                    'title'   => 'පුරුෂනා',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'meta-title'       => 'පෙරනිමවේ සෙදවොව',
                'meta-keywords'    => 'පෙරනිමවේ සෙදවොව මෙටා මාලු',
                'meta-description' => 'පෙරනිමවේ සෙදවොව මෙටා වෘක්ත',
                'name'             => 'පෙරනිමවේ',
            ],

            'currencies' => [
                'CNY' => 'චීනීස් යුවන්',
                'AED' => 'ඩිර්හඑම්',
                'EUR' => 'යුරෝ',
                'INR' => 'ඉන්දියාන රුපිය',
                'IRR' => 'ඉරානියන් රියාල්',
                'ILS' => 'ඉස්රායායෙකල්',
                'JPY' => 'ජපනීස් යෙන්',
                'GBP' => 'පවන්ඩ් ස්ටර්ලිං',
                'RUB' => 'රුසියන් රූබල්',
                'SAR' => 'සවෂවෙක් රියාල්',
                'TRY' => 'ටර්කිෂ් ලීරා',
                'USD' => 'එක්සරා ඩොලර්',
                'UAH' => 'යුක්රෙයාන් හ්රිවීනියා',
            ],

            'locales' => [
                'ar'    => 'අරාබි',
                'bn'    => 'බෙංගාලි',
                'de'    => 'ජර්මන්',
                'es'    => 'ස්පෙය්බ්',
                'en'    => 'ඉංග්රීස්',
                'fr'    => 'ප්‍රංශ්',
                'fa'    => 'පජිස්',
                'he'    => 'හීබෲ',
                'hi_IN' => 'හින්දි',
                'it'    => 'ඉතලි',
                'ja'    => 'ජපනීස්',
                'nl'    => 'ලංදු',
                'pl'    => 'පොලිෂ්',
                'pt_BR' => 'බ්‍රසිලියන් පෙරෙසියන්',
                'ru'    => 'රුසියන්',
                'sin'   => 'සිංහල',
                'tr'    => 'තුර්කි',
                'uk'    => 'යුක්රේනියා',
                'zh_CN' => 'චීන අච්චේම',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'guest'     => 'මාදී',
                'general'   => 'පෙරනිමවේ',
                'wholesale' => 'බිලිකාරෙකා',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'පෙරනිමවේ',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'image-carousel' => [
                    'name'  => 'රූපය උත්තම් සෙදවොව',

                    'sliders' => [
                        'title' => 'නව සංරච්ඡාතය සදහා වෙරි වෙරොදක්',
                    ],
                ],

                'offer-information' => [
                    'name' => 'පිලිකත් වොදත්',

                    'content' => [
                        'title' => 'ඔබගේ 1 වොහුලේ මාරු කළඹාක් සහා කරනවො',
                    ],
                ],

                'categories-collections' => [
                    'name' => 'ප්රෘදාආභර',

                ],

                'new-products' => [
                    'name' => 'නව නිෂ්කල',

                    'options' => [
                        'title' => 'නව නිෂ්කල',
                    ],
                ],

                'top-collections' => [
                    'name' => 'ඉහල ආභර',

                    'content' => [
                        'sub-title-1' => 'අපේ ආභර',
                        'sub-title-2' => 'අපේ ආභර',
                        'sub-title-3' => 'අපේ ආභර',
                        'sub-title-4' => 'අපේ ආභර',
                        'sub-title-5' => 'අපේ ආභර',
                        'sub-title-6' => 'අපේ ආභර',
                        'title'       => 'අපේ නව එම්මොාසා සහා කරනවො',
                    ],
                ],

                'bold-collections' => [
                    'name' => 'විකාශකභාපකභාපක.',

                    'content' => [
                        'btn-title'   => 'සියලුම',
                        'description' => 'අපේ නව තරුණු භාණයම එකට පහළ රචන්ඩ හා ආදාන ශතුර්අංග සහත්දන ආදානයන් සඳහා පරාස්වයක් අනුබැඳතුවනු. රුපුරේව වර්ණ රහුලක් සහ සුවද නැවත ඔබේ ඉඟිපයම නැවත රහුලා කිරීමට හොඳින් ආදානයක්.',
                        'title'       => 'අපේ නව බෝල්ඩිටම සංයලුමට අයිකරනු ලැබේ!',
                    ],
                ],

                'featured-collections' => [
                    'name' => 'ප්‍රකාශ සංයලුම',

                    'options' => [
                        'title' => 'ප්‍රකාශ නිළ භාණයන්',
                    ],
                ],

                'game-container' => [
                    'name' => 'ගේම් කොන්ටේනර්',

                    'content' => [
                        'sub-title-1' => 'අපේ සංයලුම',
                        'sub-title-2' => 'අපේ සංයලුම',
                        'title'       => 'අපේ නව එකට මෙහෙම හේතුව!',
                    ],
                ],

                'all-products' => [
                    'name' => 'සියලුම භාණයන්',

                    'options' => [
                        'title' => 'සියලුම වෙළඳ සංයලුම',
                    ],
                ],

                'footer-links' => [
                    'name' => 'පිටු සබැඳු',

                    'options' => [
                        'about-us'         => 'අප පිළිබදව',
                        'contact-us'       => 'සමස්ත කරනවා',
                        'customer-service' => 'ප්‍රකාශ සේවා',
                        'privacy-policy'   => 'පෞද්ගලිකත්ව පෞද්ගලිකත්ව',
                        'payment-policy'   => 'ගොණ පෞද්ගලිකත්ව',
                        'return-policy'    => 'ආපසුම පෞද්ගලිකත්ව.',
                        'refund-policy'    => 'හරිනායකින් පෞද්ගලිකත්ව.',
                        'shipping-policy'  => 'පෞද්ගලිකත්වකයක්ෂපෙරක්ෂ',
                        'terms-of-use'     => 'භාවිත භාවිත භාවිත',
                        'terms-conditions' => 'භාවිත සෞවිත',
                        'whats-new'        => 'අලුත් කුමුගුණපෙරක්ෂ',
                    ],
                ],
            ],
        ],

        'users' => [
            'name' => 'උදාවර',
        ],

        'roles' => [
            'description' => 'මෙම භාවිතයට සියල්ලන්ට ප්‍රවේශයට හෝ වෙනස් සහායකට සහාය ඇත',
            'name'        => 'පරිකෛටවර',
        ],
    ],

    'installer' => [
        'index' => [
            'server-requirements' => [
                'calendar'    => 'දාර්තකය',
                'ctype'       => 'ctype',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => 'ගොනු තොරතුරු',
                'filter'      => 'පෙරභාවන',
                'gd'          => 'GD',
                'hash'        => 'ඉතුරු',
                'intl'        => 'Intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'OpenSSL',
                'php'         => 'PHP',
                'php-version' => '8.1 හෝ ඉහළ',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'session'     => 'සැසුවේ',
                'title'       => 'සේවාකාරී අැතශීරී',
                'tokenizer'   => 'Tokenizer',
                'xml'         => 'XML',
            ],

            'environment-configuration' => [
                'application-name'    => 'යෙදුමේ නම',
                'arabic'              => 'අරාබි',
                'bagisto'             => 'බැගිස්ටෝ',
                'bengali'             => 'බෙංගාලි',
                'chinese-yuan'        => 'චීන යුආන් (CNY)',
                'chinese'             => 'චීන',
                'dirham'              => 'ඩිරහාම් (AED)',
                'default-url'         => 'ස්වභාවය URL',
                'default-url-link'    => 'https://localhost',
                'default-currency'    => 'ස්වභාවය වාන්වේ',
                'default-timezone'    => 'ස්වභාවය කාල කථ',
                'default-locale'      => 'ස්වභාවය පෙර දේශ',
                'dutch'               => 'ලන්දේසි',
                'database-connection' => 'දත්ත සමාපනය',
                'database-hostname'   => 'දත්ත සරාංගය නම',
                'database-port'       => 'දත්ත තැරණ',
                'database-name'       => 'දත්ත නම',
                'database-username'   => 'දත්ත පරිශීලක නම',
                'database-prefix'     => 'දත්ත උපවේශ්කය',
                'database-password'   => 'දත්ත මුරපදය',
                'euro'                => 'යුරෝ (EUR)',
                'english'             => 'ඉංග්රීසි',
                'french'              => 'ප්‍රංශ',
                'hebrew'              => 'රුවනි',
                'hindi'               => 'හින්දි',
                'iranian'             => 'ඉරාන රියාල් (IRR)',
                'israeli'             => 'ඉස්රායාල් ශෙකල් (ILS)',
                'italian'             => 'ඉතාලි',
                'japanese-yen'        => 'ජපනීස් යෙන් (JPY)',
                'japanese'            => 'ජපනීස්',
                'mysql'               => 'Mysql',
                'pgsql'               => 'pgSQL',
                'pound'               => 'බ්‍රිටිස් වෙල්ටින (GBP)',
                'persian'             => 'පදින',
                'polish'              => 'පෝලිෂ්',
                'portuguese'          => 'පෘතුගීස් (බ්‍රසීල්)',
                'rupee'               => 'ඉන්දියාන රුපිය (INR)',
                'russian-ruble'       => 'රුසියාන් රූබල් (RUB)',
                'russian'             => 'රුසියාන්',
                'sqlsrv'              => 'SQLSRV',
                'saudi'               => 'සෞඩී රියාල් (SAR)',
                'spanish'             => 'ස්පාන්',
                'sinhala'             => 'සිංහල',
                'title'               => 'පරාමිතාව විකාශනය',
                'turkish-lira'        => 'තර්කිෂ් ලීර (TRY)',
                'turkish'             => 'තර්කිෂ්',
                'usd'                 => 'ඇමෙරිකානු ඩොලර් (USD)',
                'ukrainian-hryvnia'   => 'යුක්රේනියාන් හ්‍රිව්නිය (UAH)',
                'ukrainian'           => 'යුක්රේනියාන්',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'දත්ත වගකාගකක් තථා කරනවා',
                'install'                 => 'ස්තුරාකුල',
                'install-info'            => 'උත්සහාභාවයක් සඳහා Bagisto',
                'install-info-button'     => 'පහත ඇතුලත් කිරීමට ක්රම කරන්න',
                'populate-database-table' => 'දත්ත වගකාගකක් සිටුවනවා',
                'start-installation'      => 'ස්තුරාකුල ආරම්භය',
                'title'                   => 'ස්තුරාකුල සූදාංශයට',
            ],

            'installation-processing' => [
                'bagisto'          => 'Bagisto ස්තුරාකුල',
                'bagisto-info'     => 'දත්ත වගකාගකක් සාදනු ඇති වී, මෙමගේ කුම වේදයන්ද කතාමතා වේදිය',
                'title'            => 'ස්තුරාකුල',
            ],

            'create-administrator' => [
                'admin'            => 'පරිපාල',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'මහපදය තහවුරු කරන්න',
                'email'            => 'E-mail',
                'email-address'    => 'admin@example.com',
                'password'         => 'මහපදය',
                'title'            => 'පරිපාලකරු නිපුණ',
            ],

            'email-configuration' => [
                'encryption'           => 'ගුවන්යාකරනය',
                'enter-username'       => 'පරිශීලකන් ඇතුලත් කරන්න',
                'enter-password'       => 'මහපදය ඇතුලත් කරන්න',
                'outgoing-mail-server' => 'නිරෝන තැපැල් සේවාකරනය',
                'outgoing-email'       => 'smpt.mailtrap.io',
                'password'             => 'මහපදය',
                'store-email'          => 'ගබන තැපැල් ලිපිනය',
                'enter-store-email'    => 'ගබන තැපැල් ලිපිනය ඇතුලත් කරන්න',
                'server-port'          => 'සේවාකරනය තැපැල්',
                'server-port-code'     => '3306',
                'title'                => 'තැපැල් සැකසුම',
                'username'             => 'පරිශීලක නම',
            ],

            'installation-completed' => [
                'admin-panel'                => 'පරිපාල පැනල්',
                'bagisto-forums'             => 'Bagisto සංස්ථාගත',
                'customer-panel'             => 'ප්‍රභාණ්ඩ පැනල්',
                'explore-bagisto-extensions' => 'Bagisto ප්‍රභාණ ව්‍යාකරණ',
                'title'                      => 'ස්තුරාකුල සම්තුදාව',
                'title-info'                 => 'Bagisto ඔබගේ පද්ධතියට සහාභයාගීත.',
            ],

            'bagisto-logo'             => 'Bagisto ලෝගො',
            'back'                     => 'ආපනය',
            'bagisto-info'             => 'සමුදුසමින් ව්‍යාක්රණය',
            'bagisto'                  => 'Bagisto',
            'continue'                 => 'ඉදිරිපත්',
            'installation-title'       => 'ස්තුරාකුල සහාභ',
            'installation-info'        => 'අපට ඔබ මෙතා බලන්නේ සුමුදුසමින්!',
            'installation-description' => 'Bagisto ස්තුරාකුල සහාභයට මෙතා දිගේ ස්තුරාකුල ප්‍රකාරයට වර්ගය වෙනවා:',
            'skip'                     => 'අඩභාගනනක්',
            'save-configuration'       => 'සැකසුම සුරක්ෂා',
            'title'                    => 'Bagisto ස්තුරාකුල',
            'webkul'                   => 'Webkul',
        ],
    ],
];
