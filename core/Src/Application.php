<?php
namespace Src;
use Error;
class Application
{
    private Settings $settings;
    private Database $database;
    private Route $route;
    public function __construct(Settings $settings, Database $database)
    {
        $this->settings = $settings;
        $this->database = $database;
        $this->route = new Route();
    }
    public function __get($key)
    {
        if ($key === 'settings') {
            return $this->settings;
        }
        if ($key === 'database') {
            return $this->database;
        }
        throw new Error('Accessing a non-existent property');
    }
    public function run(): void
    {
        $this->route->setPrefix($this->settings->getRootPath());
        $this->route->start();
    }
}