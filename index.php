<?php
namespace App;
require 'vendor/autoload.php';
use medoo;
use MongoDB\Client as Mongo;
use Predis\Client as Redis;
ob_start();
/*============================php===============================*/
phpinfo();
/*============================mysql=============================*/
$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => getenv('MYSQL_DATABASE'),
    'server' => getenv('DB_HOST'),
    'username' => getenv('MYSQL_USER'),
    'password' => getenv('MYSQL_PASSWORD'),
    'charset' => 'utf8'
]);
$mysqlVersion = $database->query('select version() as version')->fetchColumn();

/*============================mongodb=============================*/
//http://php.net/manual/en/mongodb.command.php
$mongo = new Mongo('mongodb://'.trim(getenv('MONGO_HOST')).':27017');
$db = $mongo->selectDatabase('test');
$info = $db->command(array('buildinfo'=>true)); //$info is Cursor

//Using a Cursor to Get All of the Documents
foreach ($info as $id => $value){
    $mongoVersion = $value['version'];
}
/*============================redis==============================*/
$redis = new Redis('tcp://'. getenv('REDIS_HOST').':6379');
$redisVersion = $redis->getProfile()->getVersion();

$html = <<<EOD
<div class="center"><table>
        <tr class="h"><th colspan="2"> %s </th></tr>
        <tr><td class="e">Version </td>
        <td class="v"> %s </td>
        </tr>
        </table></div>
EOD;

echo  sprintf($html,'Redis',$redisVersion).sprintf($html,'MongoDB',$mongoVersion);

ob_end_flush();