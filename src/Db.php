<?php 

namespace SavLaravel;
use SavLaravel\Base;
use SavLaravel\Config;

use Illuminate\Database\Capsule\Manager as Capsule;

class Db extends Base {

  static public function bind($sav, $ctx, $opts)
  {
    Config::Install($sav, $ctx, $opts);
    $db = new Capsule();
    $db->setFetchMode(\PDO::FETCH_ASSOC);
    $db->addConnection($ctx->conf["database"]);
    $db->setAsGlobal();
    return $db;
  }
}
