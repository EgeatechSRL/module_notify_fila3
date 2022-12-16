<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Http\Middleware\MirrorConfigToSubpackages;
use Filament\Pages;
=======
=======
declare(strict_types=1);

>>>>>>> b36983f (up)
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Http\Middleware\MirrorConfigToSubpackages;
use Filament\Pages;
use Filament\Widgets;
>>>>>>> 911eb41 (up)
=======
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Http\Middleware\MirrorConfigToSubpackages;
use Filament\Pages;
>>>>>>> 42f9249 (.)
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

$moduleName = 'Notify';
$moduleNs = 'Modules\Notify';
$contextNs = 'Modules\\Notify\\Filament';
$contextPath = 'Filament';
<<<<<<< HEAD
<<<<<<< HEAD

return [
=======
return [

>>>>>>> 911eb41 (up)
=======

return [
>>>>>>> b36983f (up)
    /*
    |--------------------------------------------------------------------------
    | Filament Path
    |--------------------------------------------------------------------------
    |
    | The default is `admin` but you can change it to whatever works best and
    | doesn't conflict with the routing in your application.
    |
    */

    'path' => env('FILAMENT_PATH', 'admin'),

    /*
    |--------------------------------------------------------------------------
    | Filament Domain
    |--------------------------------------------------------------------------
    |
    | You may change the domain where Filament should be active. If the domain
    | is empty, all domains will be valid.
    |
    */

    'domain' => env('FILAMENT_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Pages
    |--------------------------------------------------------------------------
    |
    | This is the namespace and directory that Filament will automatically
    | register pages from. You may also register pages here.
    |
    */

    'pages' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'namespace' => $contextNs . '\\Pages',
        'path' => base_path('Modules/' . $moduleName . "/{$contextPath}/Pages"),
=======
        'namespace' => $contextNs.'\\Pages',
<<<<<<< HEAD
        'path' => base_path('Modules/'.$moduleName."/$contextPath/Pages"),
>>>>>>> 911eb41 (up)
=======
        'path' => base_path('Modules/'.$moduleName."/{$contextPath}/Pages"),
>>>>>>> 42f9249 (.)
=======
        'namespace' => $contextNs . '\\Pages',
        'path' => base_path('Modules/' . $moduleName . "/{$contextPath}/Pages"),
>>>>>>> b735fbf (.)
        'register' => [
            Pages\Dashboard::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | This is the namespace and directory that Filament will automatically
    | register resources from. You may also register resources here.
    |
    */

    'resources' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'namespace' => $contextNs . '\\Resources',
        'path' => base_path('Modules/' . $moduleName . "/{$contextPath}/Resources"),
=======
        'namespace' => $contextNs.'\\Resources',
<<<<<<< HEAD
        'path' => base_path('Modules/'.$moduleName."/$contextPath/Resources"),
>>>>>>> 911eb41 (up)
=======
        'path' => base_path('Modules/'.$moduleName."/{$contextPath}/Resources"),
>>>>>>> 42f9249 (.)
=======
        'namespace' => $contextNs . '\\Resources',
        'path' => base_path('Modules/' . $moduleName . "/{$contextPath}/Resources"),
>>>>>>> b735fbf (.)
        'register' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Widgets
    |--------------------------------------------------------------------------
    |
    | This is the namespace and directory that Filament will automatically
    | register dashboard widgets from. You may also register widgets here.
    |
    */

    'widgets' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'namespace' => $contextNs . '\\Widgets',
        'path' => base_path('Modules/' . $moduleName . "/{$contextPath}/Widgets"),
        'register' => [
            // Widgets\AccountWidget::class,
            // Widgets\FilamentInfoWidget::class,
=======
        'namespace' => $contextNs.'\\Widgets',
        'path' => base_path('Modules/'.$moduleName."/{$contextPath}/Widgets"),
        'register' => [
<<<<<<< HEAD
            Widgets\AccountWidget::class,
<<<<<<< HEAD
            Widgets\FilamentInfoWidget::class,
>>>>>>> 911eb41 (up)
=======
=======
            //Widgets\AccountWidget::class,
>>>>>>> 40e4418 (.)
            //Widgets\FilamentInfoWidget::class,
>>>>>>> 57c26cd (up)
=======
        'namespace' => $contextNs . '\\Widgets',
        'path' => base_path('Modules/' . $moduleName . "/{$contextPath}/Widgets"),
        'register' => [
            // Widgets\AccountWidget::class,
            // Widgets\FilamentInfoWidget::class,
>>>>>>> b735fbf (.)
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | This is the namespace and directory that Filament will automatically
    | register Livewire components inside.
    |
    */

    'livewire' => [
<<<<<<< HEAD
<<<<<<< HEAD
        'namespace' => $moduleNs . '\\Http\\Livewire',
        'path' => base_path('Modules/' . $moduleName . '/Http/Livewire'),
=======
        'namespace' => $moduleNs.'\\Http\\Livewire',
        'path' => base_path('Modules/'.$moduleName.'/Http/Livewire'),
>>>>>>> 911eb41 (up)
=======
        'namespace' => $moduleNs . '\\Http\\Livewire',
        'path' => base_path('Modules/' . $moduleName . '/Http/Livewire'),
>>>>>>> b735fbf (.)
    ],

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    |
    | This is the configuration that Filament will use to handle authentication
    | into the admin panel.
    |
    */

    'auth' => [
        'guard' => env('FILAMENT_AUTH_GUARD', 'web'),
        'pages' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'login' => Modules\Notify\Http\Livewire\Auth\FilamentLogin::class,
=======
            'login' => Modules\Quaeris\Http\Livewire\Auth\FilamentLogin::class,
>>>>>>> 911eb41 (up)
=======
            'login' => Modules\Notify\Http\Livewire\Auth\FilamentLogin::class,
>>>>>>> b36983f (up)
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | You may customise the middleware stack that Filament uses to handle
    | requests.
    |
    */

    'middleware' => [
        'auth' => [
<<<<<<< HEAD
<<<<<<< HEAD
            //  Authenticate::class,
            Modules\Notify\Http\Middleware\FilamentMiddleware::class,
=======
        //  Authenticate::class,
            Modules\Quaeris\Http\Middleware\FilamentMiddleware::class
>>>>>>> 911eb41 (up)
=======
            //  Authenticate::class,
            Modules\Notify\Http\Middleware\FilamentMiddleware::class,
>>>>>>> b36983f (up)
        ],
        'base' => [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            AuthenticateSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
            DispatchServingFilamentEvent::class,
            MirrorConfigToSubpackages::class,
        ],
    ],
];