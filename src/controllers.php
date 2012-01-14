<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app->get('/posts.{format}', function() use($app){
    
    return new Response('hola');
    
});

return $app;