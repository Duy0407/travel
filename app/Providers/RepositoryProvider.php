<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interface\InterfaceUser;
use App\Repository\RepositoryUser;

// Thông tin user
use App\Interface\InterfaceUserInfo;
use App\Repository\RepositoryUserInfo;

// Thông tin chung(restaurant)
use App\Interface\Restaurant\InterfaceRestaurant;
use App\Repository\Restaurant\RepositoryRestaurant;

// Tiện nghi chính sách(restaurant)
use App\Interface\Restaurant\InterfaceTienNghiChinhSach;
use App\Repository\Restaurant\RepositoryTienNghiChinhSach;

// Thiếp lập sản phẩm(restaurant)
use App\Interface\Restaurant\InterfaceProductSettings;
use App\Repository\Restaurant\RepositoryProductSettings;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(InterfaceUser::class, RepositoryUser::class);
        $this->app->bind(InterfaceUserInfo::class, RepositoryUserInfo::class);
        
        // Thông tin chung 
        $this->app->bind(InterfaceRestaurant::class, RepositoryRestaurant::class);

        // Tiện nghi chính sách
        $this->app->bind(InterfaceTienNghiChinhSach::class, RepositoryTienNghiChinhSach::class);

        // Thiếp lập sản phẩm
        $this->app->bind(InterfaceProductSettings::class, RepositoryProductSettings::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
