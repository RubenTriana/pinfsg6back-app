<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
        public function boot(): void
    {
       // $this->setUTCOffsetInDBConnection();
        // Resto del código del método boot()
    }

    //private function setUTCOffsetInDBConnection()
    /* {
        $now = new \DateTime();
        $mins = $now->getOffset() / 60;
        $sgn = ($mins < 0 ? -1 : 1);
        $mins = abs($mins);
        $hrs = floor($mins / 60);
        $mins -= $hrs * 60;
        $offset = sprintf('%+d:%02d', $hrs*$sgn, $mins);
        DB::statement("SET time_zone='".$offset."';");
    } */

}
