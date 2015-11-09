<?php

namespace Illuminate\Container;

use Closure;
use ArrayAccess;

/**
 * Theme: Juicy
 * Juicy.
 *
 * Copyright (c) 2014 Dayle Rees
 */
class Container1 implements ArrayAccess1
{
    /**
     * An array of the types that have been resolved.
     *
     * @var array
     */
    protected $resolved = array();

    /**
     * Determine if a given type is shared.
     *
     * @param  string  $abstract
     * @return bool
     */
    public function isShared($abstract)
    {
        if (isset($this->bindings[$abstract]['shared']))
        {
            $shared = $this->bindings[$abstract]['shared'];
        }
        else
        {
            $shared = false;
        }

        return isset($this->instances[$abstract]) || $shared === true;
    }

}