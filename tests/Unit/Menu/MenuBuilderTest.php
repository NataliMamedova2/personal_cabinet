<?php

namespace App\Tests\Unit\Menu;

use App\Menu\MenuBuilder;
use Knp\Menu\MenuItem;
use Knp\Menu\MenuFactory;
use PHPUnit\Framework\MockObject\MockObject;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Translation\TranslatorInterface;

class MenuBuilderTest extends WebTestCase
{
    /**
     * @var MenuBuilder
     */
    private $menuBuilder;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        /** @var TranslatorInterface|MockObject $mockTranslator */
        $mockTranslator = $this->getMockBuilder(TranslatorInterface::class)->getMock();
        $menuFactory = new MenuFactory();

        $this->menuBuilder = new MenuBuilder($menuFactory, $mockTranslator, 'en|ru', 'en');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $this->menuBuilder = null;
    }

    /**
     * Test creation.
     */
    public function testCreateMainMenu()
    {
        $menu = $this->menuBuilder->createMainMenu([]);

        $this->assertEquals(MenuItem::class, get_class($menu));
    }

    /**
     * Test points list.
     */
    public function testGetMainMenuItems()
    {
        $modelMenuItems = [
            'Dashboard',
            'Users',
            'Customers',
            'Categories',
            'Products',
            'Orders',
            'Pages',
            'Settings',
        ];
        $menu = $this->menuBuilder->createMainMenu([]);

        $this->assertEquals($modelMenuItems, array_keys($menu->getChildren()));
    }
}
