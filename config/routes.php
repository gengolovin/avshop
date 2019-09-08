<?php

use avshop\Router;

Router::add('^product/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Product', 'action' => 'view']);
/*Router::add('^vid/(?P<id>[a-z0-9-]+)/?$', ['controller' => 'Vid', 'action' => 'view']);*/
Router::add('^category/(?P<alias>[a-z0-9-_]+)/?$', ['controller' => 'Category', 'action' => 'view']);
Router::add('^howtoshop/(?P<alias>[a-z0-9-_]+)/?$', ['controller' => 'Howtoshop', 'action' => 'view']);


// default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');