<?php

namespace Ignatiusn\SweetAlert\Services;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Ignatiusn\SweetAlert\Services\SweetAlertNotifier message(string $text = '', $title = null, $icon = null)
 * @method static \Ignatiusn\SweetAlert\Services\SweetAlertNotifier basic(string $text, string $title)
 * @method static \Ignatiusn\SweetAlert\Services\SweetAlertNotifier info(string $text, string $title = '')
 * @method static \Ignatiusn\SweetAlert\Services\SweetAlertNotifier success(string $text, string $title = '')
 * @method static \Ignatiusn\SweetAlert\Services\SweetAlertNotifier error(string $text, string $title = '')
 * @method static \Ignatiusn\SweetAlert\Services\SweetAlertNotifier warning(string $text, string $title = '')
 */
class SweetAlert extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'uxweb.sweet-alert';
    }
}
