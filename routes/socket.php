<?php


use App\Controllers\Socket\TesteController;
use Haley\Router\Websocket;

// --------------------------------------------------------------------------|
//                            WEBSOCKET ROUTES                               |
// --------------------------------------------------------------------------|

Websocket::ws(8154, [TesteController::class])->host('haley.codehalley.com')->name('teste');
