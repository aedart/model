<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Method Aware</h1>
 *
 * Component is aware of a int "method" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface MethodAware
{
    /**
     * Set method
     *
     * @param int|null $identifier Name of method or other identifier
     *
     * @return self
     */
    public function setMethod(?int $identifier);

    /**
     * Get method
     *
     * If no "method" value has been set, this method will
     * set and return a default "method" value,
     * if any such value is available
     *
     * @see getDefaultMethod()
     *
     * @return int|null method or null if no method has been set
     */
    public function getMethod() : ?int ;

    /**
     * Check if "method" has been set
     *
     * @return bool True if "method" has been set, false if not
     */
    public function hasMethod() : bool;

    /**
     * Get a default "method" value, if any is available
     *
     * @return int|null Default "method" value or null if no default value is available
     */
    public function getDefaultMethod() : ?int;
}