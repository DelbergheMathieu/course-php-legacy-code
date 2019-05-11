<?php
declare(strict_types = 1);

use Controller\PagesController;
use Controller\UsersController;

use Models\Users;

use Repository\UserRepository;

use ValueObject\DatabaseName;
use ValueObject\DatabasePassword;
use ValueObject\DatabaseUser;
use ValueObject\DatabaseDriver;
use ValueObject\DatabaseHost;

use Core\DatabaseConnect;
use Core\DatabaseInterface;

return[
    DatabaseInterface::class => function($container) {
        $host = $container['config']['database']['host'];
        $driver = $container['config']['database']['driver'];
        $name = $container['config']['database']['name'];
        $user = $container['config']['database']['user'];
        $password = $container['config']['database']['password'];

        return new DatabaseConnect(new DatabaseDriver($driver), new DatabaseHost($host), new DatabaseName($name), new DatabaseUser($user), new DatabasePassword($password));
    },
    UsersController::class => function($container) {

        $userRepository = $container[UserRepository::class]($container);
        return new UsersController($userRepository);

    },
    PagesController::class => function($container) {
        return new PagesController();
    },

    UserRepository::class => function($container) {
        $DatabaseConnect = $container[DatabaseInterface::class]($container);
        return new UserRepository($DatabaseConnect);
    }


];