<?php

use model\User;
use src\service\Router;

Router::myGet('/', 'home');
Router::myGet('/about', 'about');
Router::myGet('/train', 'train');
Router::myGet('/workout', 'workout');
Router::myGet('/article', 'article');
Router::myGet('/articles', 'articles');
Router::myGet('/admin', 'admin');
Router::myGet('/login', 'login');
Router::myGet('/register', 'register');
Router::myGet('/profile', 'profile');

Router::myPost('/register_met', User::class,  'register_met');


Router::getContent();
