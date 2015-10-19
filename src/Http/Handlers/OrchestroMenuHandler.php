<?php namespace Orchestro\Http\Handlers;

use Orchestra\Foundation\Support\MenuHandler;
use Orchestra\Contracts\Authorization\Authorization;

class OrchestroMenuHandler extends MenuHandler
{
    /**
     * Menu configuration.
     *
     * @var array
     */
    protected $menu = [
        'id'    => 'orchestro',
        'title' => 'Orchestro',
        'link'  => 'orchestra::orchestro',
        'icon'  => null,
    ];

    /**
     * Get position.
     *
     * @return string
     */
    // public function getPositionAttribute()
    // {
    //     return $this->handler->has('extensions') ? '^:extensions' : '>:home';
    // }

    /**
     * Check whether the menu should be displayed.
     *
     * @param  \Orchestra\Contracts\Authorization\Authorization  $acl
     *
     * @return bool
     */
    // public function authorize(Authorization $acl)
    // {
    //     return ($acl->can('manage roles') || $acl->can('manage acl'));
    // }
}