<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Chatty\Chatty;

require dirname(__DIR__) . "/vendor/autoload.php";

	$server = IoServer::factory(
		new HttpServer(
			new WsServer(
				new Chatty()
			)
		),
		8080
	);
	$server->run();
