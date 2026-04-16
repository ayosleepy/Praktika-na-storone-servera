<?php
namespace Src;
use Illuminate\Database\Capsule\Manager as Capsule;
class Database
{
    private Capsule $capsule;
    public function __construct(array $config)
    {
        $this->capsule = new Capsule();
        $this->capsule->addConnection($config['connections'][$config['default']]);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }
    public function getConnection(): \Illuminate\Database\Connection
    {
        return $this->capsule->getConnection();
    }
}