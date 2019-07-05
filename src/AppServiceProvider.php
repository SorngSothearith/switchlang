<?php
    namespace Switchlang;
    use Illuminate\Support\ServiceProvider;
    class AppServiceProvider extends  ServiceProvider{
        public function boot(){

        }
        public function register()
        {
//            dd(glob('/helper/*.php'));
//            foreach(glob(__DIR__.'src/helper/*.php') as $item){
//                require_once $item;
//            }
            require_once 'helper/helper.php';
        }
    }