<?php
// Your shell script
use Ratchet\Wamp\WampServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use Chatty\Wamp\BasicPubSub;

    require dirname(__DIR__) . '/vendor/autoload.php';

    $server = IoServer::factory(
        new WsServer(
            new WampServer(
                new BasicPubSub() // failing to load
            )
        )
      , 8080
    );
    $server->run();
