<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Type Aware</h1>
 *
 * Component is aware of a int "type" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface TypeAware
{
    /**
     * Set type
     *
     * @param int|null $identifier Type identifier
     *
     * @return self
     */
    public function setType(?int $identifier);

    /**
     * Get type
     *
     * If no "type" value has been set, this method will
     * set and return a default "type" value,
     * if any such value is available
     *
     * @see getDefaultType()
     *
     * @return int|null type or null if no type has been set
     */
    public function getType() : ?int ;

    /**
     * Check if "type" has been set
     *
     * @return bool True if "type" has been set, false if not
     */
    public function hasType() : bool;

    /**
     * Get a default "type" value, if any is available
     *
     * @return int|null Default "type" value or null if no default value is available
     */
    public function getDefaultType() : ?int;
}