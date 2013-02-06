<?php
/**
 * @license MIT
 * @copyright (c) 2013, Associazione UniversiBO
 */
namespace Universibo\Bundle\CampusBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Yaml\Parser;
use Universibo\Bundle\CampusBundle\DependencyInjection\UniversiboCampusExtension;

/**
 * Some methods are from FOSUserBundle (Copyright (c) 2010-2011 FriendsOfSymfony)
 * @author Davide Bellettini <davide.bellettini@gmail.com>
 */
class UniversiboCampusExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testConfigOk()
    {
        $loader = new UniversiboCampusExtension();
        $config = $this->getConfig();
        $loader->load(array($config), new ContainerBuilder());
    }
    
    /**
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     */
    public function testMissingApiUriThrowsException()
    {
        $loader = new UniversiboCampusExtension();
        $config = $this->getConfig();
        unset($config['api']['url']);
        $loader->load(array($config), new ContainerBuilder());
    }

    private function getConfig()
    {
        $yaml = <<<EOF
api:
  url: http://test-website.org/
EOF;
        $parser = new Parser();

        return $parser->parse($yaml);
    }
}
