<?php

namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use FastRoute\RouteCollector;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class Router extends AbstractRouter
{
    function initialize(RouteCollector $routeCollector)
    {
        $this->parseParams(\EasySwoole\Http\AbstractInterface\AbstractRouter::PARSE_PARAMS_IN_GET);

        $this->setGlobalMode(true);

        $routeCollector->get('/', function (Request $request, Response $response) {
            $response->write('<pre style="text-align:center; height:100px; line-height:100px; word-wrap: break-word; white-space: pre-wrap;">geekSubcribeX backend</pre>');
            return false;
        });

        $routeCollector->get('/link/{token}', '/Links');

        $this->setMethodNotAllowCallBack(function (\EasySwoole\Http\Request $request,\EasySwoole\Http\Response $response){
            $response->write('未找到处理方法');
            return false; // 结束此次响应
        });

        $this->setRouterNotFoundCallBack(function (Request $request, Response $response) {
            // $response->withStatus(404);
            $response->write('未找到路由匹配');
            return false;
        });
    }
}
