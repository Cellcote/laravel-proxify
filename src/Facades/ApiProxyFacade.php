<?php

/**
 * @package   cellcote/laravel-proxify
 * @author    Michele Andreoli <michi.andreoli[at]gmail.com>
 * @copyright Copyright (c) Michele Andreoli
 * @author    Rik Schreurs <rik.schreurs[at]mail.com>
 * @copyright Copyright (c) Rik Schreurs
 * @license   http://mit-license.org/
 * @link      https://github.com/cellcote/laravel-proxify
 */

namespace Cellcote\LaravelProxify\Facades;

use Illuminate\Support\Facades\Facade;

class ApiProxyFacade extends Facade {

    /**
     * Get the registered name of the component
     * @return string
     * @codeCoverageIgnore
     */
    protected static function getFacadeAccessor() {
        return 'api-proxy.proxy';
    }

}
