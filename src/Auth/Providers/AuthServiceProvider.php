<?php
namespace Tuezy\Auth\Repositories\Contracts;

use Tuezy\Auth\Repositories\UserRepository;
use Tuezy\Core\ServiceProvider;

class AuthServiceProvider extends ServiceProvider{

    public function register(){
        foreach([
                    UserRepositoryContract::class => UserRepository::class

                ] as  $abstract => $concrete){
            $this->container->alias($abstract, $concrete);
        }

    }
}