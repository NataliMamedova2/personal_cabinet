<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\Translation\TranslatorInterface;

class MenuBuilder
{
    /**
     * @var FactoryInterface
     */
    private $factory;
    private $translator;

    /**
     * MenuBuilder constructor.
     *
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory, TranslatorInterface $translator, $locales, $defaultLocale)
    {
        $this->factory = $factory;
        $this->translator = $translator;
    }

    /**
     * @param array $options
     *
     * @return \Knp\Menu\ItemInterface
     */
    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('root');
        $menu->setCurrent(true);
        $menu->setChildrenAttributes(
            [
             'class' => 'sidebar-menu',
             'data-widget' => 'tree',
            ]
        );

        $menu->addChild($this->translator->trans('menu.dashboard'), ['route' => 'dashboard_index'])
             ->setAttribute('icon', 'fa fa-dashboard');

        $menu->addChild($this->translator->trans('menu.users'), ['route' => 'users_index'])
            ->setAttribute('icon', 'fa fa-users');

        $menu->addChild($this->translator->trans('menu.customers'), ['route' => 'customers_index'])
            ->setAttribute('icon', 'fa  fa-users');

        $menu->addChild($this->translator->trans('menu.categories'), ['route' => 'category_index'])
            ->setAttribute('icon', 'fa fa-table');

        $menu->addChild($this->translator->trans('menu.products'), ['route' => 'products_index'])
            ->setAttribute('icon', 'fa fa-table');

        $menu->addChild($this->translator->trans('menu.orders'), ['route' => 'orders_index'])
            ->setAttribute('icon', 'fa fa-table');

        $menu->addChild($this->translator->trans('menu.pages'), ['route' => 'pages_index'])
            ->setAttribute('icon', 'fa fa-book');

        $menu->addChild($this->translator->trans('menu.settings'), ['route' => 'settings_index'])
            ->setAttribute('icon', 'fa fa-laptop');

        return $menu;
    }
}
