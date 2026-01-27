<?php

declare(strict_types=1);

namespace Tipowerup\Template;

use Igniter\System\Classes\BaseExtension;

class Extension extends BaseExtension
{
    /**
     * Register extension services.
     */
    public function register(): void
    {
        parent::register();
    }

    /**
     * Boot extension after all services are registered.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register admin navigation menu items.
     */
    public function registerNavigation(): array
    {
        return [];
    }

    /**
     * Register backend permissions.
     */
    public function registerPermissions(): array
    {
        return [];
    }

    /**
     * Register extension settings.
     */
    public function registerSettings(): array
    {
        return [];
    }
}
