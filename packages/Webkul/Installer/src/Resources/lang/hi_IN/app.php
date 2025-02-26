<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'डिफ़ॉल्ट',
            ],

            'attribute-groups' => [
                'description'       => 'विवरण',
                'general'           => 'सामान्य',
                'inventories'       => 'इन्वेंटरी',
                'meta-description'  => 'मेटा विवरण',
                'price'             => 'मूल्य',
                'shipping'          => 'शिपिंग',
                'settings'          => 'सेटिंग्स',
            ],

            'attributes' => [
                'brand'                => 'ब्रांड',
                'color'                => 'रंग',
                'cost'                 => 'लागत',
                'description'          => 'विवरण',
                'featured'             => 'लोकप्रिय',
                'guest-checkout'       => 'मेहमान चेकआउट',
                'height'               => 'ऊँचाई',
                'length'               => 'लंबाई',
                'meta-title'           => 'मेटा शीर्षक',
                'meta-keywords'        => 'मेटा कीवर्ड्स',
                'meta-description'     => 'मेटा विवरण',
                'manage-stock'         => 'स्टॉक प्रबंधन',
                'new'                  => 'नया',
                'name'                 => 'नाम',
                'product-number'       => 'उत्पाद संख्या',
                'price'                => 'मूल्य',
                'sku'                  => 'SKU',
                'status'               => 'स्थिति',
                'short-description'    => 'संक्षेप विवरण',
                'special-price'        => 'विशेष मूल्य',
                'special-price-from'   => 'विशेष मूल्य से',
                'special-price-to'     => 'विशेष मूल्य तक',
                'size'                 => 'साइज़',
                'tax-category'         => 'कर श्रेणी',
                'url-key'              => 'URL कुंजी',
                'visible-individually' => 'व्यक्तिगत रूप से दिखाएं',
                'width'                => 'चौड़ाई',
                'weight'               => 'वजन',
            ],

            'attribute-options' => [
                'black'  => 'काला',
                'green'  => 'हरा',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'लाल',
                's'      => 'S',
                'white'  => 'सफेद',
                'xl'     => 'XL',
                'yellow' => 'पीला',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'रूख श्रेणी विवरण',
                'name'        => 'रूख',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'हमारे बारे में पृष्ठ सामग्री',
                    'title'   => 'हमारे बारे में',
                ],

                'refund-policy' => [
                    'content' => 'वापसी नीति पृष्ठ सामग्री',
                    'title'   => 'वापसी नीति',
                ],

                'return-policy' => [
                    'content' => 'वापसी नीति पृष्ठ सामग्री',
                    'title'   => 'वापसी नीति',
                ],

                'terms-conditions' => [
                    'content' => 'नियम और शर्तों पृष्ठ सामग्री',
                    'title'   => 'नियम और शर्तें',
                ],

                'terms-of-use' => [
                    'content' => 'उपयोग की शर्तें पृष्ठ सामग्री',
                    'title'   => 'उपयोग की शर्तें',
                ],

                'contact-us' => [
                    'content' => 'हमसे संपर्क करें पृष्ठ सामग्री',
                    'title'   => 'हमसे संपर्क करें',
                ],

                'customer-service' => [
                    'content' => 'ग्राहक सेवा पृष्ठ सामग्री',
                    'title'   => 'ग्राहक सेवा',
                ],

                'whats-new' => [
                    'content' => 'नई चीजें पृष्ठ सामग्री',
                    'title'   => 'नई चीजें',
                ],

                'payment-policy' => [
                    'content' => 'भुगतान नीति पृष्ठ सामग्री',
                    'title'   => 'भुगतान नीति',
                ],

                'shipping-policy' => [
                    'content' => 'शिपिंग नीति पृष्ठ सामग्री',
                    'title'   => 'शिपिंग नीति',
                ],

                'privacy-policy' => [
                    'content' => 'गोपनीयता नीति पृष्ठ सामग्री',
                    'title'   => 'गोपनीयता नीति',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'meta-title'       => 'डेमो स्टोर',
                'meta-keywords'    => 'डेमो स्टोर मेटा कीवर्ड',
                'meta-description' => 'डेमो स्टोर मेटा विवरण',
                'name'             => 'डिफ़ॉल्ट',
            ],

            'currencies' => [
                'CNY' => 'चीनी युआन',
                'AED' => 'दिर्हम',
                'EUR' => 'यूरो',
                'INR' => 'भारतीय रुपया',
                'IRR' => 'ईरानी रियाल',
                'ILS' => 'इज़राइली शेकेल',
                'JPY' => 'जापानी येन',
                'GBP' => 'पौंड स्टर्लिंग',
                'RUB' => 'रूसी रूबल',
                'SAR' => 'सउदी रियाल',
                'TRY' => 'तुर्की लीरा',
                'USD' => 'यूएस डॉलर',
                'UAH' => 'यूक्रेनियन ह्रिव्निया',
            ],

            'locales' => [
                'ar'    => 'अरबी',
                'bn'    => 'बंगाली',
                'de'    => 'जर्मन',
                'es'    => 'स्पेनिश',
                'en'    => 'अंग्रेज़ी',
                'fr'    => 'फ्रेंच',
                'fa'    => 'फारसी',
                'he'    => 'हिब्रू',
                'hi_IN' => 'हिंदी',
                'it'    => 'इटैलियन',
                'ja'    => 'जैपनी',
                'nl'    => 'डच',
                'pl'    => 'पोलिश',
                'pt_BR' => 'ब्राज़ीलियाई पुर्तगाली',
                'ru'    => 'रूसी',
                'sin'   => 'सिंहला',
                'tr'    => 'तुर्की',
                'uk'    => 'यूक्रेनियन',
                'zh_CN' => 'चीनी',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'guest'     => 'अतिथि',
                'general'   => 'सामान्य',
                'wholesale' => 'थोक',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'डिफ़ॉल्ट',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'image-carousel' => [
                    'name'  => 'चित्र स्लाइडर',

                    'sliders' => [
                        'title' => 'नई संग्रह के लिए तैयार रहें',
                    ],
                ],

                'offer-information' => [
                    'name' => 'ऑफ़र जानकारी',

                    'content' => [
                        'title' => 'अपने पहले आर्डर पर 40% तक की छूट पाएं, अब खरीदें',
                    ],
                ],

                'categories-collections' => [
                    'name' => 'श्रेणियाँ संग्रह',
                ],

                'new-products' => [
                    'name' => 'नई उत्पाद',

                    'options' => [
                        'title' => 'नई उत्पाद',
                    ],
                ],

                'top-collections' => [
                    'name' => 'शीर्ष संग्रह',

                    'content' => [
                        'sub-title-1' => 'हमारी संग्रह',
                        'sub-title-2' => 'हमारी संग्रह',
                        'sub-title-3' => 'हमारी संग्रह',
                        'sub-title-4' => 'हमारी संग्रह',
                        'sub-title-5' => 'हमारी संग्रह',
                        'sub-title-6' => 'हमारी संग्रह',
                        'title'       => 'हमारे नए योगदान के साथ खेल!',
                    ],
                ],

                'bold-collections' => [
                    'name' => 'बोल्ड संग्रह',

                    'content' => [
                        'btn-title'   => 'सभी देखें',
                        'description' => 'हमारी नई बोल्ड संग्रह का परिचय! साहसी डिज़ाइन और जीवंत कथनों के साथ अपनी शैली को उन्नत करें. हरित पैटर्न और बोल्ड रंगों की खोज करें जो आपके वस्त्र को पुनर्निर्भर कर देते हैं. असाधारण को ग्रहण करने के लिए तैयार हो जाइए!',
                        'title'       => 'हमारे नए बोल्ड संग्रह के लिए तैयार हो जाइए!',
                    ],
                ],

                'featured-collections' => [
                    'name' => 'विशेष संग्रह',

                    'options' => [
                        'title' => 'विशेष उत्पाद',
                    ],
                ],

                'game-container' => [
                    'name' => 'खेल संदूक',

                    'content' => [
                        'sub-title-1' => 'हमारी संग्रह',
                        'sub-title-2' => 'हमारी संग्रह',
                        'title'       => 'हमारे नए योगदान के साथ खेल!',
                    ],
                ],

                'all-products' => [
                    'name' => 'सभी उत्पाद',

                    'options' => [
                        'title' => 'सभी उत्पाद',
                    ],
                ],

                'footer-links' => [
                    'name' => 'फ़ूटर लिंक्स',

                    'options' => [
                        'about-us'         => 'हमारे बारे में',
                        'contact-us'       => 'हमसे संपर्क करें',
                        'customer-service' => 'ग्राहक सेवा',
                        'privacy-policy'   => 'गोपनीयता नीति',
                        'payment-policy'   => 'भुगतान नीति',
                        'return-policy'    => 'वापसी नीति',
                        'refund-policy'    => 'धन वापसी नीति',
                        'shipping-policy'  => 'शिपिंग नीति',
                        'terms-of-use'     => 'उपयोग की शर्तें',
                        'terms-conditions' => 'शर्तें और गोपनीयता',
                        'whats-new'        => 'नई चीजें',
                    ],
                ],
            ],
        ],

        'user' => [
            'users' => [
                'name' => 'उदाहरण',
            ],

            'roles' => [
                'description' => 'इस भूमिका वाले उपयोगकर्ताओं को सभी पहुंच होगी',
                'name'        => 'प्रशासक',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'server-requirements' => [
                'calendar'    => 'कैलेंडर',
                'ctype'       => 'सीटाइप',
                'curl'        => 'सीयूआरएल',
                'dom'         => 'डॉम',
                'fileinfo'    => 'फ़ाइलइन्फो',
                'filter'      => 'फ़िल्टर',
                'gd'          => 'जीडी',
                'hash'        => 'हैश',
                'intl'        => 'इंटरनेशनलिजेशन',
                'json'        => 'जेसन',
                'mbstring'    => 'एमबीस्ट्रिंग',
                'openssl'     => 'ओपनएसएसएल',
                'php'         => 'पीएचपी',
                'php-version' => '8.1 या उच्च',
                'pcre'        => 'पीसीआरई',
                'pdo'         => 'पीडीओ',
                'session'     => 'सत्र',
                'title'       => 'सर्वर आवश्यकताएँ',
                'tokenizer'   => 'टोकनाइज़र',
                'xml'         => 'एक्सएमएल',
            ],

            'environment-configuration' => [
                'application-name'    => 'ऐप्लिकेशन का नाम',
                'arabic'              => 'अरबी',
                'bagisto'             => 'बैगिस्टो',
                'bengali'             => 'बंगाली',
                'chinese-yuan'        => 'चाइनीज युआन (CNY)',
                'chinese'             => 'चीनी',
                'dirham'              => 'दिर्हम (AED)',
                'default-url'         => 'डिफ़ॉल्ट यूआरएल',
                'default-url-link'    => 'https://localhost',
                'default-currency'    => 'डिफ़ॉल्ट मुद्रा',
                'default-timezone'    => 'डिफ़ॉल्ट समय क्षेत्र',
                'default-locale'      => 'डिफ़ॉल्ट लोकेल',
                'dutch'               => 'डच',
                'database-connection' => 'डेटाबेस कनेक्शन',
                'database-hostname'   => 'डेटाबेस होस्टनेम',
                'database-port'       => 'डेटाबेस पोर्ट',
                'database-name'       => 'डेटाबेस का नाम',
                'database-username'   => 'डेटाबेस उपयोगकर्ता नाम',
                'database-prefix'     => 'डेटाबेस प्रिफ़िक्स',
                'database-password'   => 'डेटाबेस पासवर्ड',
                'euro'                => 'यूरो (EUR)',
                'english'             => 'अंग्रेज़ी',
                'french'              => 'फ्रेंच',
                'hebrew'              => 'हिब्रू',
                'hindi'               => 'हिन्दी',
                'iranian'             => 'इरानी रियाल (IRR)',
                'israeli'             => 'इजरायली शेकेल (ILS)',
                'italian'             => 'इटैलियन',
                'japanese-yen'        => 'जापानी येन (JPY)',
                'japanese'            => 'जापानी',
                'mysql'               => 'मायस्क्यूएल',
                'pgsql'               => 'पोस्टग्रेसक्यूएल',
                'pound'               => 'पाउंड स्टर्लिंग (GBP)',
                'persian'             => 'फारसी',
                'polish'              => 'पोलिश',
                'portuguese'          => 'ब्राजीली पुर्तगाली',
                'rupee'               => 'भारतीय रुपया (INR)',
                'russian-ruble'       => 'रूसी रूबल (RUB)',
                'russian'             => 'रूसी',
                'sqlsrv'              => 'SQLSRV',
                'saudi'               => 'सऊदी रियाल (SAR)',
                'spanish'             => 'स्पेनिश',
                'sinhala'             => 'सिंहला',
                'title'               => 'पर्यावरण कॉन्फ़िगरेशन',
                'turkish-lira'        => 'टर्किश लीरा (TRY)',
                'turkish'             => 'टर्की',
                'usd'                 => 'यूएस डॉलर (USD)',
                'ukrainian-hryvnia'   => 'यूक्रेनियन ह्रीवनिया (UAH)',
                'ukrainian'           => 'यूक्रेनियन',
            ],

            'ready-for-installation' => [
                'create-database-table'   => 'डेटाबेस तालिका बनाएं',
                'install'                 => 'स्थापना',
                'install-info'            => 'बैगिस्टो के लिए स्थापना',
                'install-info-button'     => 'नीचे दिए गए बटन पर क्लिक करें',
                'populate-database-table' => 'डेटाबेस तालिकाओं को भरें',
                'start-installation'      => 'स्थापना प्रारंभ करें',
                'title'                   => 'स्थापना के लिए तैयार',
            ],

            'installation-processing' => [
                'bagisto'          => 'बैगिस्टो स्थापना',
                'bagisto-info'     => 'डेटाबेस तालिकाएँ बनाने का प्रक्रियाण, इसमें कुछ क्षण लग सकते हैं',
                'title'            => 'स्थापना',
            ],

            'create-administrator' => [
                'admin'            => 'व्यवस्थापक',
                'bagisto'          => 'बैगिस्टो',
                'confirm-password' => 'पासवर्ड की पुष्टि करें',
                'email'            => 'ईमेल',
                'email-address'    => 'admin@example.com',
                'password'         => 'पासवर्ड',
                'title'            => 'प्रबंधक बनाएं',
            ],

            'email-configuration' => [
                'encryption'           => 'एन्क्रिप्शन',
                'enter-username'       => 'उपयोगकर्ता नाम दर्ज करें',
                'enter-password'       => 'पासवर्ड दर्ज करें',
                'outgoing-mail-server' => 'बाहरी मेल सर्वर',
                'outgoing-email'       => 'smpt.mailtrap.io',
                'password'             => 'पासवर्ड',
                'store-email'          => 'स्टोर ईमेल पता',
                'enter-store-email'    => 'स्टोर ईमेल पता दर्ज करें',
                'server-port'          => 'सर्वर पोर्ट',
                'server-port-code'     => '3306',
                'title'                => 'ईमेल कॉन्फ़िगरेशन',
                'username'             => 'उपयोगकर्ता नाम',
            ],

            'installation-completed' => [
                'admin-panel'                => 'व्यवस्थापक पैनल',
                'bagisto-forums'             => 'Bagisto फ़ोरम',
                'customer-panel'             => 'ग्राहक पैनल',
                'explore-bagisto-extensions' => 'Bagisto एक्सटेंशन अन्वेषण करें',
                'title'                      => 'स्थापना पूर्ण',
                'title-info'                 => 'बैगिस्टो को आपके सिस्टम पर सफलतापूर्वक स्थापित किया गया है।',
            ],

            'bagisto-logo'             => 'Bagisto लोगो',
            'back'                     => 'पीछे जाएं',
            'bagisto-info'             => 'वेबकुल द्वारा समुदाय परियोजना',
            'bagisto'                  => 'बैगिस्टो',
            'continue'                 => 'जारी रखें',
            'installation-title'       => 'स्थापना में आपका स्वागत है',
            'installation-info'        => 'हम आपको यहां देखकर खुश हैं!',
            'installation-description' => 'Bagisto इंस्टॉलेशन सामान्य रूप से कई कदमों को शामिल करती है। यहां Bagisto के लिए इंस्टॉलेशन प्रक्रिया की सामान्य रूप से रूपरेखा है:',
            'skip'                     => 'छोड़ें',
            'save-configuration'       => 'कॉन्फ़िगरेशन सहेजें',
            'title'                    => 'Bagisto स्थापक',
            'webkul'                   => 'Webkul',
        ],
    ],
];
