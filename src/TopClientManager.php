<?php
namespace Oauthq\TopClient;

use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;
use Oauthq\TopClient\Factories\TopClientFactory;

class TopClientManager extends AbstractManager
{
    protected $factory;

    public function __construct(Repository $config, TopClientFactory $factory)
    {
        parent::__construct($config);
        $this->factory = $factory;
    }

    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }

    protected function getConfigName()
    {
        return 'taobaotop';
    }

    public function getFactory()
    {
        return $this->factory;
    }
}
