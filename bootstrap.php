<?php

$configuration = array(
    'db_dsn'  => 'mysql:host=127.127.126.50;dbname=oo_battle',
    'db_user' => 'wolf',
    'db_pass' => 'pass1234',
);

require_once __DIR__.'/lib/Model/AbstractShip.php';
require_once __DIR__.'/lib/Service/Container.php';
require_once __DIR__.'/lib/Model/Ship.php';
require_once __DIR__.'/lib/Service/BattleManager.php';
require_once __DIR__.'/lib/Service/ShipLoader.php';
require_once __DIR__.'/lib/Model/BattleResult.php';
require_once __DIR__.'/lib/Model/RebelShip.php';
