<?php
namespace App;
require 'vendor/autoload.php';
use MongoDB\Client as Mongo;
use Predis\Client as Redis;
use Medoo\Medoo;
use MongoDB\Driver\Manager as mongoMgr;
use MongoDB\Driver\Command as mongoCommand;

ob_start();

// php
phpinfo();


// MySQL
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => getenv('MYSQL_DATABASE'),
    'server' => getenv('DB_HOST'),
    'username' => getenv('MYSQL_USER'),
    'password' => getenv('MYSQL_PASSWORD')
]);
$mysqlVersion = $database->query('select version() as version')->fetchColumn();

// mongodb
$manager = new mongoMgr('mongodb://'.trim(getenv('MONGO_HOST')).':27017');
$command = new mongoCommand(array('buildinfo'=>true));
$cursor = $manager->executeCommand('db', $command);
$mongoVersion = $cursor->toArray()[0]->version;

// redis
$redis = new Redis('tcp://'. getenv('REDIS_HOST').':6379');
$redisVersion = $redis->getProfile()->getVersion();

$html = <<<EOD
<div class="center">
<table>
        <tr class="h"><th colspan="2"> %s </th></tr>
        <tr><td class="e">Version </td>
        <td class="v"> %s </td>
        </tr>
        </table></div>
EOD;

echo  sprintf($html,'Redis Database in Docker',$redisVersion).sprintf($html,'MongoDB Database in Docker',$mongoVersion);

ob_end_flush();