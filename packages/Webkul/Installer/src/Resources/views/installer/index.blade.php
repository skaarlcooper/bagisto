<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@lang('installer::app.installer.index.title')</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="base-url" content="{{ url()->to('/') }}">

        @stack('meta')

        @bagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'], 'installer')

        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
            rel="stylesheet"
        />

        <link
            type="image/x-icon"
            href="{{ asset('images/logo.svg') }}"
            rel="shortcut icon"
            sizes="16x16"
        />

        @stack('styles')
    </head>

    <body>
        <div id="app" class="container">
            <div class="flex [&amp;>*]:w-[50%] justify-center items-center">
                <v-server-requirements></v-server-requirements>
            </div>
        </div>

        @pushOnce('scripts')
            <script type="text/x-template" id="v-server-requirements-template">
                <!-- Left Side Welcome to Installation -->
                <div class="flex flex-col justify-center">
                    <div class="grid items-end max-w-[362px] m-auto h-[100vh]">
                        <div class="grid gap-[16px]">
                            <img
                                src="{{ bagisto_asset('images/bagisto-logo.svg', 'installer') }}"
                                alt="@lang('installer::app.installer.index.bagisto-logo')"
                            >

                            <div class="grid gap-[6px]">
                                <p class="text-gray-800 text-[20px] font-bold">
                                    @lang('installer::app.installer.index.installation-title')
                                </p>

                                <p class="text-gray-600 text-[14px]">
                                    @lang('installer::app.installer.index.installation-info')
                                </p>
                            </div>

                            <p class="text-gray-600 text-[14px]">
                                @lang('installer::app.installer.index.installation-description')
                            </p>

                            <div class="grid gap-[12px]">
                                <!-- Server Environment -->
                                <div
                                    class="flex gap-[4px] text-[14px] text-gray-600"
                                    :class="[stepStates.environment == 'active' ? 'font-bold' : '', 'text-gray-600']"
                                >
                                    <span v-if="stepStates.environment !== 'complete'">
                                        <span
                                            class="text-[20px]"
                                            :class="stepStates.environment === 'pending' ? 'icon-checkbox' : 'icon-processing'"
                                        >
                                        </span>
                                    </span>

                                    <span v-else>
                                        <span class="icon-tick text-green-500"></span>
                                    </span>

                                    <p>@lang('installer::app.installer.index.server-requirements.title')</p>
                                </div>

                                <!-- ENV Setup -->
                                <div
                                    class="flex gap-[4px] text-[14px] text-gray-600"
                                    :class="[stepStates.envSetup == 'active' ? 'font-bold' : '', 'text-gray-600']"
                                >
                                    <span v-if="stepStates.envSetup !== 'complete'">
                                        <span
                                            class="text-[20px]"
                                            :class="stepStates.envSetup === 'pending' ? 'icon-checkbox' : 'icon-processing'"
                                        >
                                        </span>
                                    </span>

                                    <span v-else>
                                        <span class="icon-tick text-green-500"></span>
                                    </span>

                                    <p>@lang('installer::app.installer.index.environment-configuration.title')</p>
                                </div>

                                <!-- Ready For Installation -->
                                <div
                                    class="flex gap-[4px] text-[14px] text-gray-600"
                                    :class="[stepStates.readyForInstallation == 'active' ? 'font-bold' : '', 'text-gray-600']"
                                >
                                    <span v-if="stepStates.readyForInstallation !== 'complete'">
                                        <span
                                            class="text-[20px]"
                                            :class="stepStates.readyForInstallation === 'pending' ? 'icon-checkbox' : 'icon-processing'"
                                        >
                                        </span>
                                    </span>

                                    <span v-else>
                                        <span class="icon-tick text-green-500"></span>
                                    </span>

                                    <p>@lang('installer::app.installer.index.ready-for-installation.title')</p>
                                </div>

                                <!-- Create Admin Configuration -->
                                <div
                                    class="flex gap-[4px] text-[14px] text-gray-600"
                                    :class="[stepStates.createAdmin == 'active' ? 'font-bold' : '', 'text-gray-600']"
                                >
                                    <span v-if="stepStates.createAdmin !== 'complete'">
                                        <span
                                            class="text-[20px]"
                                            :class="stepStates.createAdmin === 'pending' ? 'icon-checkbox' : 'icon-processing'"
                                        >
                                        </span>
                                    </span>

                                    <span v-else>
                                        <span class="icon-tick text-green-500"></span>
                                    </span>

                                    <p>@lang('installer::app.installer.index.create-administrator.title')</p>
                                </div>

                                <!-- Email Configuration -->
                                <div
                                    class="flex gap-[4px] text-[14px] text-gray-600"
                                    :class="[stepStates.emailConfiguration == 'active' ? 'font-bold' : '', 'text-gray-600']"
                                >
                                    <span v-if="stepStates.emailConfiguration !== 'complete'">
                                        <span
                                            class="text-[20px]"
                                            :class="stepStates.emailConfiguration === 'pending' ? 'icon-checkbox' : 'icon-processing'"
                                        >
                                        </span>
                                    </span>

                                    <span v-else>
                                        <span class="icon-tick text-green-500"></span>
                                    </span>

                                    <p>@lang('installer::app.installer.index.email-configuration.title')</p>
                                </div>

                                <!-- Installation Completed -->
                                <div
                                    class="flex gap-[4px] text-[14px] text-gray-600"
                                    :class="[stepStates.installationCompleted == 'active' ? 'font-bold' : '', 'text-gray-600']"
                                >
                                    <span v-if="stepStates.installationCompleted !== 'complete'">
                                        <span
                                            class="text-[20px]"
                                            :class="stepStates.installationCompleted === 'pending' ? 'icon-checkbox' : 'icon-processing'"
                                        >
                                        </span>
                                    </span>

                                    <span v-else>
                                        <span class="icon-tick text-green-500"></span>
                                    </span>

                                    <p>@lang('installer::app.installer.index.installation-completed.title')</p>
                                </div>

                            </div>
                        </div>

                        <p class="place-self-end w-full text-left mb-[24px]">
                            <a
                                class="bg-white underline text-blue-500"
                                href="https://bagisto.com/en/"
                            >
                                @lang('installer::app.installer.index.bagisto')
                            </a>

                            @lang('installer::app.installer.index.bagisto-info')

                            <a
                                class="bg-white underline text-blue-500"
                                href="https://webkul.com/"
                            >
                                @lang('installer::app.installer.index.webkul')
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Right Side Components -->
                <!-- Server Requirements -->
                <div class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300" v-if="currentStep == 'environment'">
                    <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                        <p class="text-[20px] text-gray-800 font-bold">
                            @lang('installer::app.installer.index.server-requirements.title')
                        </p>
                    </div>

                    <div class="flex flex-col gap-[15px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[486px] overflow-y-auto">
                        <div class="flex gap-[4px]">
                            <span class="{{ $phpVersion['supported'] ? 'icon-tick text-[20px] text-green-500' : '' }}"></span>

                            <p class="text-[14px] text-gray-600 font-semibold">
                                @lang('installer::app.installer.index.server-requirements.php') <span class="font-normal">(@lang('installer::app.installer.index.server-requirements.php-version'))</span>
                            </p>
                        </div>

                        @foreach ($requirements['requirements'] as $requirement)
                            @foreach ($requirement as $key => $item)
                                <div class="flex gap-[4px]">
                                    <span class="{{ $item ? 'icon-tick text-green-500' : 'icon-cross text-red-500' }} text-[20px]"></span>

                                    <p class="text-[14px] text-gray-600 font-semibold">
                                        @lang('installer::app.installer.index.server-requirements.' . $key)
                                    </p>
                                </div>
                            @endforeach
                        @endforeach
                    </div>

                    @php
                        $hasRequirement = false;

                        foreach ($requirements['requirements']['php'] as $value) {
                            if (!$value) {
                                $hasRequirement = true;
                                break;
                            }
                        }
                    @endphp

                    <div class="flex px-[16px] py-[10px] justify-end items-center">
                        <div
                            class="{{ $hasRequirement ? 'opacity-50 cursor-not-allowed' : ''}} px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer {{ $hasRequirement ?: 'hover:opacity-90' }}"
                            @click="nextForm"
                        >
                            @lang('installer::app.installer.index.continue')
                        </div>
                    </div>
                </div>

                <!-- Environment Configuration .ENV -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'envSetup'"
                >
                    <x-installer::form
                        v-slot="{ meta, errors, handleSubmit }"
                        as="div"
                        ref="envSetup"
                    >
                        <form
                            @submit.prevent="handleSubmit($event, nextForm)"
                            enctype="multipart/form-data"
                        >
                            <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                <p class="text-[20px] text-gray-800 font-bold">
                                    @lang('installer::app.installer.index.environment-configuration.title')
                                </p>
                            </div>

                            <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                <!-- Application Name -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.application-name')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="app_name"
                                        ::value="envData.app_name ?? 'Bagisto'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.application-name')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.bagisto')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="app_name"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Application Default URL -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.default-url')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="app_url"
                                        ::value="envData.app_url ?? 'https://localhost'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.default-url')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.default-url-link')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="app_url"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Application Default Currency -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.default-currency')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="select"
                                        name="app_currency"
                                        ::value="envData.app_currency ?? 'USD'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.default-currency')"
                                    >
                                        <option value="CNY">@lang('installer::app.installer.index.environment-configuration.chinese-yuan')</option>
                                        <option value="AED">@lang('installer::app.installer.index.environment-configuration.dirham')</option>
                                        <option value="EUR">@lang('installer::app.installer.index.environment-configuration.euro')</option>
                                        <option value="INR">@lang('installer::app.installer.index.environment-configuration.rupee')</option>
                                        <option value="IRR">@lang('installer::app.installer.index.environment-configuration.iranian')</option>
                                        <option value="ILS">@lang('installer::app.installer.index.environment-configuration.israeli')</option>
                                        <option value="JPY">@lang('installer::app.installer.index.environment-configuration.japanese-yen')</option>
                                        <option value="GBP">@lang('installer::app.installer.index.environment-configuration.pound')</option>
                                        <option value="RUB">@lang('installer::app.installer.index.environment-configuration.russian-ruble')</option>
                                        <option value="SAR">@lang('installer::app.installer.index.environment-configuration.saudi')</option>
                                        <option value="TRY">@lang('installer::app.installer.index.environment-configuration.turkish-lira')</option>
                                        <option value="USD" selected>@lang('installer::app.installer.index.environment-configuration.usd')</option>
                                        <option value="UAH">@lang('installer::app.installer.index.environment-configuration.ukrainian-hryvnia')</option>
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="app_currency"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Application Default Timezone -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.default-timezone')
                                    </x-installer::form.control-group.label>

                                    @php
                                        date_default_timezone_set('UTC');

                                        $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);

                                        $current = date_default_timezone_get();
                                    @endphp

                                    <x-installer::form.control-group.control
                                        type="select"
                                        name="app_timezone"
                                        ::value="envData.app_timezone ?? $current"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.default-timezone')"
                                        >
                                        @foreach($tzlist as $key => $value)
                                            <option
                                                value="{{ $value }}"
                                                {{ $value === $current ? 'selected' : '' }}
                                            >
                                                {{ $value }}
                                            </option>
                                        @endforeach
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="app_timezone"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Application Default Locale -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.default-locale')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="select"
                                        name="app_locale"
                                        ::value="envData.app_locale ?? 'en'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.default-locale')"
                                    >
                                        <option value="ar">@lang('installer::app.installer.index.environment-configuration.arabic')</option>
                                        <option value="bn">@lang('installer::app.installer.index.environment-configuration.bengali')</option>
                                        <option value="pt_BR">@lang('installer::app.installer.index.environment-configuration.portuguese')</option>
                                        <option value="zh_CN">@lang('installer::app.installer.index.environment-configuration.chinese')</option>
                                        <option value="nl">@lang('installer::app.installer.index.environment-configuration.dutch')</option>
                                        <option value="en" selected>@lang('installer::app.installer.index.environment-configuration.english')</option>
                                        <option value="fr">@lang('installer::app.installer.index.environment-configuration.french')</option>
                                        <option value="de">@lang('installer::app.installer.index.environment-configuration.dutch')</option>
                                        <option value="he">@lang('installer::app.installer.index.environment-configuration.hebrew')</option>
                                        <option value="hi_IN">@lang('installer::app.installer.index.environment-configuration.hindi')</option>
                                        <option value="it">@lang('installer::app.installer.index.environment-configuration.italian')</option>
                                        <option value="ja">@lang('installer::app.installer.index.environment-configuration.japanese')</option>
                                        <option value="fa">@lang('installer::app.installer.index.environment-configuration.persian')</option>
                                        <option value="pl">@lang('installer::app.installer.index.environment-configuration.polish')</option>
                                        <option value="ru">@lang('installer::app.installer.index.environment-configuration.russian')</option>
                                        <option value="sin">@lang('installer::app.installer.index.environment-configuration.sinhala')</option>
                                        <option value="es">@lang('installer::app.installer.index.environment-configuration.spanish')</option>
                                        <option value="tr">@lang('installer::app.installer.index.environment-configuration.turkish')</option>
                                        <option value="uk">@lang('installer::app.installer.index.environment-configuration.ukrainian')</option>
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="app_locale"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>
                            </div>

                            <div class="flex px-[16px] py-[10px] justify-between items-center">
                                <div
                                    class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                                    role="button"
                                    aria-label="@lang('installer::app.installer.index.back')"
                                    tabindex="0"
                                    @click="back"
                                >
                                    @lang('installer::app.installer.index.back')
                                </div>

                                <button
                                    type="submit"
                                    class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                >
                                    @lang('installer::app.installer.index.continue')
                                </button>
                            </div>

                        </form>
                    </x-installer::form>
                </div>

                <!-- Environment Configuration Database -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'envDatabase'"
                >
                    <x-installer::form
                        v-slot="{ meta, errors, handleSubmit }"
                        as="div"
                        ref="envDatabase"
                    >
                        <form
                            @submit.prevent="handleSubmit($event, FormSubmit)"
                            enctype="multipart/form-data"
                        >
                            <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                <p class="text-[20px] text-gray-800 font-bold">
                                    @lang('installer::app.installer.index.environment-configuration.title')
                                </p>
                            </div>

                            <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                <!-- Database Connection-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.database-connection')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="select"
                                        name="db_connection"
                                        ::value="envData.db_connection ?? 'mysql'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-connection')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-connection')"
                                    >
                                        <option
                                            value="mysql"
                                            selected
                                        >
                                            @lang('installer::app.installer.index.environment-configuration.mysql')
                                        </option>

                                        <option value="pgsql">@lang('installer::app.installer.index.environment-configuration.pgsql')</option>
                                        <option value="sqlsrv">@lang('installer::app.installer.index.environment-configuration.sqlsrv')</option>
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_connection"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Database Hostname-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.database-hostname')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="db_hostname"
                                        ::value="envData.db_hostname ?? '127.0.0.1'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-hostname')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-hostname')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_hostname"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Database Port-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.database-port')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="db_port"
                                        ::value="envData.db_port ?? '3306'"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-port')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-port')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_port"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Database name-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.database-name')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="db_name"
                                        ::value="envData.db_name"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-name')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-name')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_name"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Database Prefix-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label>
                                        @lang('installer::app.installer.index.environment-configuration.database-prefix')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="db_prefix"
                                        ::value="envData.db_prefix"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-prefix')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-prefix')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_prefix"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Database Username-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.database-username')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="db_username"
                                        ::value="envData.db_username"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-username')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-username')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_username"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Database Password-->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.environment-configuration.database-password')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="password"
                                        name="db_password"
                                        ::value="envData.db_password"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.environment-configuration.database-password')"
                                        :placeholder="trans('installer::app.installer.index.environment-configuration.database-password')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="db_password"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>
                            </div>

                            <div class="flex px-[16px] py-[10px] justify-between items-center">
                                <div
                                    class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                                    role="button"
                                    :aria-label="@lang('installer::app.installer.index.back')"
                                    tabindex="0"
                                    @click="back"
                                >
                                    @lang('installer::app.installer.index.back')
                                </div>

                                <button
                                    type="submit"
                                    class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                >
                                    @lang('installer::app.installer.index.continue')
                                </button>
                            </div>
                        </form>
                    </x-installer::form>
                </div>

                <!-- Ready For Installation -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'readyForInstallation'"
                >
                    <x-installer::form
                        v-slot="{ meta, errors, handleSubmit }"
                        as="div"
                        ref="envDatabase"
                    >
                        <form
                            @submit.prevent="handleSubmit($event, FormSubmit)"
                            enctype="multipart/form-data"
                        >
                            <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                <p class="text-[20px] text-gray-800 font-bold">
                                    @lang('installer::app.installer.index.ready-for-installation.install')
                                </p>
                            </div>

                            <div class="flex flex-col gap-[15px] justify-center px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                <div class="flex flex-col gap-[16px]">
                                    <p class="text-[18px] text-gray-800 font-semibold">
                                        @lang('installer::app.installer.index.ready-for-installation.install-info')
                                    </p>

                                    <div class="grid gap-[10px]">
                                        <label class="text-[14px] text-gray-600">
                                            @lang('installer::app.installer.index.ready-for-installation.install-info-button')
                                        </label>

                                        <div class="grid gap-[12px]">
                                            <div class="flex gap-[4px] text-[14px] text-gray-600">
                                                <span class="icon-processing text-[20px]"></span>

                                                <p>@lang('installer::app.installer.index.ready-for-installation.create-databsae-table')</p>
                                            </div>

                                            <div class="flex gap-[4px] text-[14px] text-gray-600">
                                                <span class="icon-processing text-[20px]"></span>

                                                <p>@lang('installer::app.installer.index.ready-for-installation.populate-database-table')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex px-[16px] py-[10px] justify-between items-center">
                                <div
                                    class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                                    role="button"
                                    :aria-label="@lang('installer::app.installer.index.back')"
                                    tabindex="0"
                                    @click="back"
                                >
                                    Back
                                </div>

                                <button
                                    type="submit"
                                    class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                >
                                    @lang('installer::app.installer.index.ready-for-installation.start-installation')
                                </button>
                            </div>
                        </form>
                    </x-installer::form>
                </div>

                <!-- Installation Processing -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'installProgress'"
                >
                    <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                        <p class="text-[20px] text-gray-800 font-bold">
                            @lang('installer::app.installer.index.installation-processing.title')
                        </p>
                    </div>

                    <div class="flex flex-col gap-[15px] justify-center px-[30px] py-[16px] h-[484px] overflow-y-auto">
                        <div class="flex flex-col gap-[16px]">
                            <p class="text-[18px] text-gray-800 font-bold">
                                @lang('installer::app.installer.index.installation-processing.bagisto')
                            </p>

                            <div class="grid gap-[10px]">
                                <!-- Spinner -->
                                <img
                                    class="animate-spin h-5 w-5 text-navyBlue"
                                    src="{{ bagisto_asset('images/spinner.svg', 'installer') }}"
                                    alt="Loading"
                                />

                                <p class="text-[14px] text-gray-600">
                                    @lang('installer::app.installer.index.installation-processing.bagisto-info')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- installation Log -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'installationLog'"
                >
                    <div
                        class="flex flex-col gap-[15px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[486px] overflow-y-auto"
                        v-if="seederLog"
                    >
                        <p
                            class="h-full"
                            v-html="seederLog"
                        >
                        </p>
                    </div>

                    <div class="flex px-[16px] py-[10px] justify-end items-center">
                        <button
                            type="submit"
                            class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                            @click="nextForm"
                        >
                            @lang('installer::app.installer.index.continue')
                        </button>
                    </div>
                </div>

                <!-- Create Administrator -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'createAdmin'"
                >
                    <x-installer::form
                        v-slot="{ meta, errors, handleSubmit }"
                        as="div"
                        ref="createAdmin"
                    >
                        <form
                            @submit.prevent="handleSubmit($event, FormSubmit)"
                            enctype="multipart/form-data"
                        >
                            <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                <p class="text-[20px] text-gray-800 font-bold">
                                    @lang('installer::app.installer.index.create-administrator.title')
                                </p>
                            </div>

                            <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                <!-- Admin -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.create-administrator.admin')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="admin"
                                        value="Admin"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.create-administrator.admin')"
                                        :placeholder="trans('installer::app.installer.index.create-administrator.bagisto')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="admin"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Email -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.create-administrator.email')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="email"
                                        value="admin@example.com"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.create-administrator.email')"
                                        :placeholder="trans('installer::app.installer.index.create-administrator.email-address')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="email"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Password -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.create-administrator.password')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="password"
                                        name="password"
                                        :value="old('password')"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.create-administrator.password')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="password"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Confirm Password -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.create-administrator.confirm-password')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="password"
                                        name="confirm_password"
                                        :value="old('confirm_password')"
                                        rules="required|confirmed:@password"
                                        :label="trans('installer::app.installer.index.create-administrator.confirm-password')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="confirm_password"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>
                            </div>

                            <div class="flex px-[16px] py-[10px] justify-end items-center">
                                <button
                                    type="submit"
                                    class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                >
                                    @lang('installer::app.installer.index.continue')
                                </button>
                            </div>

                        </form>
                    </x-installer::form>
                </div>

                <!-- Email Configuration Form -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'emailConfiguration'"
                >
                    <x-installer::form
                        v-slot="{ meta, errors, handleSubmit }"
                        as="div"
                        ref="emailConfiguration"
                    >
                        <form
                            @submit.prevent="handleSubmit($event, FormSubmit)"
                            enctype="multipart/form-data"
                        >
                            <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                                <p class="text-[20px] text-gray-800 font-bold">
                                    @lang('installer::app.installer.index.email-configuration.title')
                                </p>
                            </div>

                            <div class="flex flex-col gap-[12px] px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                                <!-- Outgoing Mail Server -->
                                <div class="flex gap-[6px]">
                                    <x-installer::form.control-group class="w-full mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.index.email-configuration.outgoing-mail-server')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="text"
                                            name="mail_host"
                                            value="smpt.mailtrap.io"
                                            rules="required"
                                            :label="trans('installer::app.installer.index.email-configuration.outgoing-mail-server')"
                                            :placeholder="trans('installer::app.installer.index.email-configuration.outgoing-email')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="mail_host"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>

                                    <!-- Server Port -->
                                    <x-installer::form.control-group class="w-full mb-[10px]">
                                        <x-installer::form.control-group.label class="required">
                                            @lang('installer::app.installer.index.email-configuration.server-port')
                                        </x-installer::form.control-group.label>

                                        <x-installer::form.control-group.control
                                            type="number"
                                            name="mail_port"
                                            value="3306"
                                            rules="required"
                                            :label="trans('installer::app.installer.index.email-configuration.server-port')"
                                            :placeholder="trans('installer::app.installer.index.email-configuration.server-port-code')"
                                        >
                                        </x-installer::form.control-group.control>

                                        <x-installer::form.control-group.error
                                            control-name="mail_port"
                                        >
                                        </x-installer::form.control-group.error>
                                    </x-installer::form.control-group>
                                </div>

                                <!-- Encryption -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.email-configuration.encryption')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="select"
                                        name="mail_encryption"
                                        value="tls"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.email-configuration.encryption')"
                                    >
                                        <option value="tls" selected>TLS</option>
                                        <option value="ssl">SSL</option>
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="mail_encryption"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Store Email Address -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.email-configuration.store-email')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="mail_from_address"
                                        :value="old('mail_from_address')"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.email-configuration.store-email')"
                                        :placeholder="trans('installer::app.installer.index.email-configuration.enter-store-email')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="mail_from_address"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Username -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.email-configuration.username')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="text"
                                        name="mail_username"
                                        :value="old('mail_username')"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.email-configuration.username')"
                                        :placeholder="trans('installer::app.installer.index.email-configuration.enter-username')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="mail_username"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>

                                <!-- Password -->
                                <x-installer::form.control-group class="mb-[10px]">
                                    <x-installer::form.control-group.label class="required">
                                        @lang('installer::app.installer.index.email-configuration.password')
                                    </x-installer::form.control-group.label>

                                    <x-installer::form.control-group.control
                                        type="password"
                                        name="mail_password"
                                        :value="old('mail_password')"
                                        rules="required"
                                        :label="trans('installer::app.installer.index.email-configuration.password')"
                                        :placeholder="trans('installer::app.installer.index.email-configuration.enter-password')"
                                    >
                                    </x-installer::form.control-group.control>

                                    <x-installer::form.control-group.error
                                        control-name="mail_password"
                                    >
                                    </x-installer::form.control-group.error>
                                </x-installer::form.control-group>
                            </div>

                            <div class="flex gap-[10px] justify-end items-center px-[16px] py-[10px]">
                                <!-- Skip button -->
                                <div
                                    class="transparent-button px-[12px] py-[6px] rounded-[6px] text-blue-600 font-semibold cursor-pointer hover:bg-gray-200 "
                                    role="button"
                                    aria-label="@lang('installer::app.installer.index.skip')"
                                    tabindex="0"
                                    @click="skip"
                                >
                                    @lang('installer::app.installer.index.skip')
                                </div>
        
                                <button
                                    type="submit"
                                    class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                >
                                    @lang('installer::app.installer.index.save-configuration')
                                </button>
                            </div>
                        </form>
                    </x-installer::form>
                </div>

                <!-- Installation Completed -->
                <div
                    class="w-full max-w-[568px] bg-white rounded-[8px] shadow-[0px_8px_10px_0px_rgba(0,0,0,0.05)] border-[1px] border-gray-300"
                    v-if="currentStep == 'installationCompleted'"
                >
                    <div class="flex justify-between items-center gap-[10px] px-[16px] py-[11px] border-b-[1px] border-gray-300">
                        <p class="text-[20px] text-gray-800 font-bold">
                            @lang('installer::app.installer.index.installation-completed.title')
                        </p>
                    </div>

                    <div class="flex flex-col gap-[15px] justify-center px-[30px] py-[16px] border-b-[1px] border-gray-300 h-[484px] overflow-y-auto">
                        <div class="flex flex-col gap-[16px]">
                            <div class="flex items-center justify-center rounded-full border border-green-500 w-[30px] h-[30px]">
                                <span class="icon-tick text-[20px] text-green-500 font-semibold"></span>
                            </div>

                            <div class="grid gap-[10px]">
                                <p class="text-[18px] text-gray-800 font-semibold">
                                    @lang('installer::app.installer.index.installation-completed.title')
                                </p>

                                <p class="text-[14px] text-gray-600">
                                    @lang('installer::app.installer.index.installation-completed.title-info')
                                </p>

                                <div class="flex justify-between items-center max-w-[288px]">
                                    <a
                                        href="{{ URL('/admin/login')}}"
                                        class="px-[12px] py-[6px] bg-white border border-blue-700 rounded-[6px] text-blue-600 font-semibold cursor-pointer hover:opacity-90"
                                    >
                                        @lang('installer::app.installer.index.installation-completed.admin-panel')
                                    </a>

                                    <a
                                        href="{{ URL('/')}}"
                                        class="px-[12px] py-[6px] bg-blue-600 border border-blue-700 rounded-[6px] text-gray-50 font-semibold cursor-pointer hover:opacity-90"
                                    >
                                        @lang('installer::app.installer.index.installation-completed.customer-panel')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex px-[16px] py-[10px] justify-between items-center">
                        <a
                            href="https://forums.bagisto.com"
                            class="text-[12px] text-blue-600 font-semibold cursor-pointer"
                        >
                            @lang('installer::app.installer.index.installation-completed.bagisto-forums')
                        </a>

                        <a
                            href="https://bagisto.com/en/extensions"
                            class="px-[12px] py-[6px] bg-white border border-blue-700 rounded-[6px] text-blue-600 font-semibold cursor-pointer hover:opacity-90"
                        >
                            @lang('installer::app.installer.index.installation-completed.explore-bagisto-extensions')
                        </a>
                    </div>
                </div>
            </script>

            <script type="module">
                app.component('v-server-requirements', {
                    template: '#v-server-requirements-template',

                    data() {
                        return {
                            step: '',

                            currentStep: 'environment',

                            envData: {},

                            stepStates: {
                                environment: 'active',
                                envSetup: 'pending',
                                readyForInstallation: 'pending',
                                createAdmin: 'pending',
                                emailConfiguration: 'pending',
                                installationCompleted: 'pending',
                            },

                            steps: [
                                'environment',
                                'envSetup',
                                'envDatabase',
                                'readyForInstallation',
                                'installProgress',
                                'installationLog',
                                'createAdmin',
                                'emailConfiguration',
                                'installationCompleted',
                            ],

                            seederLog: {},
                        }
                    },

                    methods: {
                        FormSubmit(params, { setErrors }) {
                            const stepActions = {
                                envDatabase: () => {
                                    if (params.db_connection === 'mysql') {
                                        this.completeStep('envSetup', 'readyForInstallation', 'active', 'complete', setErrors);

                                        this.envData = { ...this.envData, ...params };
                                    } else {
                                        setErrors({ 'db_connection': ["Bagisto currently supports MySQL only."] });
                                    }
                                },

                                readyForInstallation: (setErrors) => {
                                    this.currentStep = 'installProgress';

                                    this.startInstallation(setErrors);
                                },

                                createAdmin: (setErrors) => {
                                    this.completeStep('createAdmin', 'emailConfiguration', 'active', 'complete', setErrors);

                                    this.saveAdmin(params, setErrors);
                                },

                                emailConfiguration: (setErrors) => {
                                    this.completeStep('emailConfiguration', 'installationCompleted', 'active', 'complete', setErrors);


                                    this.saveSmtp(params, setErrors);
                                },
                            };

                            const index = this.steps.find(step => step === this.currentStep);

                            if (stepActions[index]) {
                                stepActions[index]();
                            }
                        },

                        nextForm(params) {
                            const stepActions = {
                                environment: () => {
                                    this.completeStep('environment', 'envSetup', 'active', 'complete');
                                },

                                envSetup: () => {
                                    this.envData = { ...params };

                                    this.currentStep = 'envDatabase';
                                },

                                installationLog: () => {
                                    this.completeStep('readyForInstallation', 'createAdmin', 'active', 'complete');
                                },
                            };

                            const index = this.steps.find(step => step === this.currentStep);

                            if (stepActions[index]) {
                                stepActions[index]();
                            }
                        },

                        completeStep(fromStep, toStep, toState, nextState, setErrors) {
                            this.stepStates[fromStep] = nextState;

                            this.currentStep = toStep;

                            this.stepStates[toStep] = toState;
                        },

                        startInstallation(setErrors) {
                            this.$axios.post("{{ route('installer.env_file_setup') }}", this.envData)
                                .then((response) => {
                                    this.runMigartion(setErrors);
                                })
                                .catch(error => {
                                    setErrors(error.response.data.errors);
                                });
                        },

                        runMigartion(setErrors) {
                            this.$axios.post("{{ route('installer.run_migration') }}")
                                .then((response) => {
                                    this.seederLog = response.data;

                                    this.currentStep = 'installationLog';
                                })
                                .catch(error => {
                                    this.currentStep = 'envDatabase';

                                    this.$axios.post("{{ route('installer.delete_env_file') }}")
                                        .then((response) => {
                                            alert(error.response.data.error ?? error.response.data);
                                        })
                                        .catch((deleteError) => {
                                            alert('Error deleting .env file:', deleteError);
                                        });

                                });
                        },

                        saveAdmin(params, setErrors) {
                            this.$axios.post("{{ route('installer.admin_config_setup') }}", params)
                                .then((response) => {
                                    this.currentStep = 'emailConfiguration';
                                })
                                .catch(error => {
                                    setErrors(error.response.data.errors);
                                });
                        },

                        skip() {
                            this.completeStep('emailConfiguration', 'installationCompleted', 'active', 'complete');

                            this.currentStep = 'installationCompleted';
                        },

                        saveSmtp(params, setErrors) {
                            this.$axios.post("{{ route('installer.smtp_config_setup') }}", params)
                                .then((response) => {
                                })
                                .catch(error => {
                                    setErrors(error.response.data.errors);
                                });
                        },

                        back() {
                            if (this.$refs[this.currentStep] && this.$refs[this.currentStep].setValues) {
                                this.$refs[this.currentStep].setValues(this.envData);
                            }

                            let index = this.steps.indexOf(this.currentStep);

                            if (index > 0) {
                                this.currentStep = this.steps[index -1];
                            }
                        },
                    },
                });
            </script>
        @endPushOnce

        @stack('scripts')
    </body>
</html>
