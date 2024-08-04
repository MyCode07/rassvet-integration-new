<?php

return function (FastRoute\RouteCollector $router) {
    $router->addRoute('GET', '/', 'App\Controller\HomeController@index');
    $router->addRoute('POST', '/add-report', 'App\Controller\AddReportController@index');
};
