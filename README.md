## Authentication of Laravel 7

## Require 
- php version 7.2.5
https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/


## First clone

- composer update
- php artisan key:generate
- npm install
- npm run watch
- php artisan migrate:fresh --seed



## How to do

## install laravl 7
- composer create-project --prefer-dist laravel/laravel:^7.0 blog

## install auth
- composer update
- composer require laravel/ui
- php artisan ui vue --auth
- php artisan key:generate
- npm install
- npm run dev

## create two table user, admin and model also
- default auth keep for table user
- for admin auth copy from default auth

## how to custom default auth to admin auth
- create folder Admins in controller and copy default auth past in folder

- change current place controller
   namespace App\Http\Controllers\Admins\Auth;

## set redirect user and admin in middleware RedirectIfAuthenticated

    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                    if (Auth::guard($guard)->check()) {
                        return redirect('admin/home');
                    }
                break;
            default:
                    if (Auth::guard($guard)->check()) {
                        return redirect('/home');
                    }
                break;
        }
        return $next($request);
    }

## config guards for admin in auth.php

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

## copy view auth default to admin