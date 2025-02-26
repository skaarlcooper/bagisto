<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'По умолчанию',
            ],

            'attribute-groups' => [
                'description'       => 'Описание',
                'general'           => 'Общее',
                'inventories'       => 'Инвентарь',
                'meta-description'  => 'Мета-описание',
                'price'             => 'Цена',
                'shipping'          => 'Доставка',
                'settings'          => 'Настройки',
            ],

            'attributes' => [
                'brand'                => 'Бренд',
                'color'                => 'Цвет',
                'cost'                 => 'Стоимость',
                'description'          => 'Описание',
                'featured'             => 'Популярный',
                'guest-checkout'       => 'Гостевой заказ',
                'height'               => 'Высота',
                'length'               => 'Длина',
                'meta-title'           => 'Мета-заголовок',
                'meta-keywords'        => 'Мета-ключевые слова',
                'meta-description'     => 'Мета-описание',
                'manage-stock'         => 'Управление запасами',
                'new'                  => 'Новый',
                'name'                 => 'Название',
                'product-number'       => 'Артикул',
                'price'                => 'Цена',
                'sku'                  => 'Артикул товара (SKU)',
                'status'               => 'Статус',
                'short-description'    => 'Краткое описание',
                'special-price'        => 'Специальная цена',
                'special-price-from'   => 'Специальная цена от',
                'special-price-to'     => 'Специальная цена до',
                'size'                 => 'Размер',
                'tax-category'         => 'Категория налога',
                'url-key'              => 'Ключ URL',
                'visible-individually' => 'Видимость по отдельности',
                'width'                => 'Ширина',
                'weight'               => 'Вес',
            ],

            'attribute-options' => [
                'black'  => 'Черный',
                'green'  => 'Зеленый',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Красный',
                's'      => 'S',
                'white'  => 'Белый',
                'xl'     => 'XL',
                'yellow' => 'Желтый',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'Описание корневой категории',
                'name'        => 'Корень',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Содержание страницы "О нас"',
                    'title'   => 'О нас',
                ],

                'refund-policy' => [
                    'content' => 'Содержание страницы "Политика возврата"',
                    'title'   => 'Политика возврата',
                ],

                'return-policy' => [
                    'content' => 'Содержание страницы "Политика возврата"',
                    'title'   => 'Политика возврата',
                ],

                'terms-conditions' => [
                    'content' => 'Содержание страницы "Условия и положения"',
                    'title'   => 'Условия и положения',
                ],

                'terms-of-use' => [
                    'content' => 'Содержание страницы "Условия использования"',
                    'title'   => 'Условия использования',
                ],

                'contact-us' => [
                    'content' => 'Содержание страницы "Свяжитесь с нами"',
                    'title'   => 'Свяжитесь с нами',
                ],

                'customer-service' => [
                    'content' => 'Содержание страницы "Служба поддержки клиентов"',
                    'title'   => 'Служба поддержки клиентов',
                ],

                'whats-new' => [
                    'content' => 'Содержание страницы "Что нового"',
                    'title'   => 'Что нового',
                ],

                'payment-policy' => [
                    'content' => 'Содержание страницы "Политика оплаты"',
                    'title'   => 'Политика оплаты',
                ],

                'shipping-policy' => [
                    'content' => 'Содержание страницы "Политика доставки"',
                    'title'   => 'Политика доставки',
                ],

                'privacy-policy' => [
                    'content' => 'Содержание страницы "Политика конфиденциальности"',
                    'title'   => 'Политика конфиденциальности',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'meta-title'       => 'Демонстрационный магазин',
                'meta-keywords'    => 'Мета-ключевые слова демонстрационного магазина',
                'meta-description' => 'Мета-описание демонстрационного магазина',
                'name'             => 'По умолчанию',
            ],

            'currencies' => [
                'CNY' => 'Китайский юань',
                'AED' => 'Дирхам',
                'EUR' => 'Евро',
                'INR' => 'Индийская рупия',
                'IRR' => 'Иранский риал',
                'ILS' => 'Израильский шекель',
                'JPY' => 'Японская йена',
                'GBP' => 'Фунт стерлингов',
                'RUB' => 'Российский рубль',
                'SAR' => 'Саудовский риял',
                'TRY' => 'Турецкая лира',
                'USD' => 'Доллар США',
                'UAH' => 'Украинская гривна',
            ],

            'locales' => [
                'ar'    => 'Арабский',
                'bn'    => 'Бенгальский',
                'de'    => 'Немецкий',
                'es'    => 'Испанский',
                'en'    => 'Английский',
                'fr'    => 'Французский',
                'fa'    => 'Персидский',
                'he'    => 'Иврит',
                'hi_IN' => 'Хинди',
                'it'    => 'Итальянский',
                'ja'    => 'Японский',
                'nl'    => 'Голландский',
                'pl'    => 'Польский',
                'pt_BR' => 'Бразильский португальский',
                'ru'    => 'Русский',
                'sin'   => 'Сингальский',
                'tr'    => 'Турецкий',
                'uk'    => 'Украинский',
                'zh_CN' => 'Китайский',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'guest'     => 'Гость',
                'general'   => 'Общий',
                'wholesale' => 'Оптовый',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'По умолчанию',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'image-carousel' => [
                    'name'  => 'Карусель изображений',

                    'sliders' => [
                        'title' => 'Готовьтесь к новой коллекции',
                    ],
                ],

                'offer-information' => [
                    'name' => 'Информация о предложениях',

                    'content' => [
                        'title' => 'Скидка до 40% на ваш первый заказ! ПОКУПАЙТЕ СЕЙЧАС',
                    ],
                ],

                'categories-collections' => [
                    'name' => 'Категории и коллекции',
                ],

                'new-products' => [
                    'name' => 'Новые товары',

                    'options' => [
                        'title' => 'Новые товары',
                    ],
                ],

                'top-collections' => [
                    'name' => 'Лучшие коллекции',

                    'content' => [
                        'sub-title-1' => 'Наши коллекции',
                        'sub-title-2' => 'Наши коллекции',
                        'sub-title-3' => 'Наши коллекции',
                        'sub-title-4' => 'Наши коллекции',
                        'sub-title-5' => 'Наши коллекции',
                        'sub-title-6' => 'Наши коллекции',
                        'title'       => 'Игра с нашими новыми добавлениями!',
                    ],
                ],

                'bold-collections' => [
                    'name' => 'Смелые коллекции',

                    'content' => [
                        'btn-title'   => 'Посмотреть все',
                        'description' => 'Представляем наши новые смелые коллекции! Поднимите свой стиль с смелыми дизайнами и яркими заявлениями. Исследуйте выдающиеся узоры и яркие цвета, которые переопределяют ваш гардероб. Готовьтесь встретить нечто необычное!',
                        'title'       => 'Подготовьтесь к нашим новым смелым коллекциям!',
                    ],
                ],

                'featured-collections' => [
                    'name' => 'Избранные коллекции',

                    'options' => [
                        'title' => 'Популярные товары',
                    ],
                ],

                'game-container' => [
                    'name' => 'Игровой контейнер',

                    'content' => [
                        'sub-title-1' => 'Наши коллекции',
                        'sub-title-2' => 'Наши коллекции',
                        'title'       => 'Игра с нашими новыми добавлениями!',
                    ],
                ],

                'all-products' => [
                    'name' => 'Все товары',

                    'options' => [
                        'title' => 'Все товары',
                    ],
                ],

                'footer-links' => [
                    'name' => 'Ссылки внизу страницы',

                    'options' => [
                        'about-us'         => 'О нас',
                        'contact-us'       => 'Свяжитесь с нами',
                        'customer-service' => 'Служба поддержки',
                        'privacy-policy'   => 'Политика конфиденциальности',
                        'payment-policy'   => 'Политика оплаты',
                        'return-policy'    => 'Политика возврата',
                        'refund-policy'    => 'Политика возврата средств',
                        'shipping-policy'  => 'Политика доставки',
                        'terms-of-use'     => 'Условия использования',
                        'terms-conditions' => 'Условия и положения',
                        'whats-new'        => 'Что нового',
                    ],
                ],
            ],
        ],

        'user' => [
            'users' => [
                'name' => 'Пример',
            ],

            'roles' => [
                'description' => 'Эта роль предоставляет пользователям полный доступ',
                'name'        => 'Администратор',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'server-requirements' => [
                'calendar'    => 'Календарь',
                'ctype'       => 'ctype',
                'curl'        => 'cURL',
                'dom'         => 'DOM',
                'fileinfo'    => 'Информация о файле',
                'filter'      => 'Фильтр',
                'gd'          => 'GD',
                'hash'        => 'Хэш',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'OpenSSL',
                'php'         => 'PHP',
                'php-version' => '8.1 и выше',
                'pcre'        => 'PCRE',
                'pdo'         => 'PDO',
                'session'     => 'Сессия',
                'title'       => 'Требования сервера',
                'tokenizer'   => 'Tokenizer',
                'xml'         => 'XML',
            ],

            'environment-configuration' => [
                'application-name'    => 'Имя приложения',
                'arabic'              => 'Арабский',
                'bagisto'             => 'Bagisto',
                'bengali'             => 'Бенгальский',
                'chinese-yuan'        => 'Китайский юань (CNY)',
                'chinese'             => 'Китайский',
                'dirham'              => 'Дирхам (AED)',
                'default-url'         => 'URL по умолчанию',
                'default-url-link'    => 'https://localhost',
                'default-currency'    => 'Валюта по умолчанию',
                'default-timezone'    => 'Часовой пояс по умолчанию',
                'default-locale'      => 'Языковая локаль по умолчанию',
                'dutch'               => 'Голландский',
                'database-connection' => 'Подключение к базе данных',
                'database-hostname'   => 'Имя хоста базы данных',
                'database-port'       => 'Порт базы данных',
                'database-name'       => 'Имя базы данных',
                'database-username'   => 'Имя пользователя базы данных',
                'database-prefix'     => 'Префикс базы данных',
                'database-password'   => 'Пароль базы данных',
                'euro'                => 'Евро (EUR)',
                'english'             => 'Английский',
                'french'              => 'Французский',
                'hebrew'              => 'Иврит',
                'hindi'               => 'Хинди',
                'iranian'             => 'Иранский риал (IRR)',
                'israeli'             => 'Израильский шекель (ILS)',
                'italian'             => 'Итальянский',
                'japanese-yen'        => 'Японская иена (JPY)',
                'japanese'            => 'Японский',
                'mysql'               => 'Mysql',
                'pgsql'               => 'pgSQL',
                'pound'               => 'Британский фунт стерлингов (GBP)',
                'persian'             => 'Персидский',
                'polish'              => 'Польский',
                'portuguese'          => 'Португальский (бразильский)',
                'rupee'               => 'Индийская рупия (INR)',
                'russian-ruble'       => 'Российский рубль (RUB)',
                'russian'             => 'Русский',
                'sqlsrv'              => 'SQLSRV',
                'saudi'               => 'Саудовский риял (SAR)',
                'spanish'             => 'Испанский',
                'sinhala'             => 'Сингальский',
                'title'               => 'Конфигурация окружения',
                'turkish-lira'        => 'Турецкая лира (TRY)',
                'turkish'             => 'Турецкий',
                'usd'                 => 'Доллар США (USD)',
                'ukrainian-hryvnia'   => 'Украинская гривна (UAH)',
                'ukrainian'           => 'Украинский',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Создать таблицу в базе данных',
                'install'                 => 'Установка',
                'install-info'            => 'Bagisto для установки',
                'install-info-button'     => 'Нажмите кнопку ниже, чтобы',
                'populate-database-table' => 'Заполнить таблицы базы данных',
                'start-installation'      => 'Начать установку',
                'title'                   => 'Готово к установке',
            ],

            'installation-processing' => [
                'bagisto'          => 'Установка Bagisto',
                'bagisto-info'     => 'Создание таблиц в базе данных может занять несколько моментов',
                'title'            => 'Установка',
            ],

            'create-administrator' => [
                'admin'            => 'Администратор',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Подтвердите пароль',
                'email'            => 'E-mail',
                'email-address'    => 'admin@example.com',
                'password'         => 'Пароль',
                'title'            => 'Создать администратора',
            ],

            'email-configuration' => [
                'encryption'           => 'Шифрование',
                'enter-username'       => 'Введите имя пользователя',
                'enter-password'       => 'Введите пароль',
                'outgoing-mail-server' => 'Исходящий почтовый сервер',
                'outgoing-email'       => 'smpt.mailtrap.io',
                'password'             => 'Пароль',
                'store-email'          => 'Адрес электронной почты магазина',
                'enter-store-email'    => 'Введите адрес электронной почты магазина',
                'server-port'          => 'Порт сервера',
                'server-port-code'     => '3306',
                'title'                => 'Настройка почты',
                'username'             => 'Имя пользователя',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Панель администратора',
                'bagisto-forums'             => 'Форум Bagisto',
                'customer-panel'             => 'Панель клиента',
                'explore-bagisto-extensions' => 'Изучите расширения Bagisto',
                'title'                      => 'Установка завершена',
                'title-info'                 => 'Bagisto успешно установлен на вашей системе.',
            ],

            'bagisto-logo'             => 'Логотип Bagisto',
            'back'                     => 'Назад',
            'bagisto-info'             => 'Проект сообщества',
            'bagisto'                  => 'Bagisto',
            'continue'                 => 'Продолжить',
            'installation-title'       => 'Добро пожаловать к установке',
            'installation-info'        => 'Мы рады видеть вас здесь!',
            'installation-description' => 'Установка Bagisto обычно включает в себя несколько шагов. Вот общий план процесса установки Bagisto:',
            'skip'                     => 'Пропустить',
            'save-configuration'       => 'Сохранить конфигурацию',
            'title'                    => 'Установщик Bagisto',
            'webkul'                   => 'Webkul',
        ],
    ],
];
