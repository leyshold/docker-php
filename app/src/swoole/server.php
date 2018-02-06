<?php
/**
 * Created by PhpStorm.
 * User: shuanghe
 * Date: 18/2/5
 * Time: 14:46
 */

$server = new \Swoole\Http\Server('0.0.0.0', 9501);

$server->on('request', function (swoole_http_request $request, swoole_http_response $response) {
    $response->end("<h1>hello swoole</h1>");
});

$server->start();