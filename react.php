<?php
require './vendor/autoload.php';
$loop = new React\EventLoop\StreamSelectLoop();
$socket = new React\Socket\Server($loop);
$http = new React\Http\Server($socket, $loop);
$i = 0;
$http->on('request', function ($request, $response) use (&$i) {
    $i++;
    $response->writeHead();
    $response->end("Hello World!\n");
});

$socket->listen(8090,'0.0.0.0');
$loop->run();