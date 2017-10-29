<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Id Aware</h1>
 *
 * Component is aware of a int "id" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface IdAware
{
    /**
     * Set id
     *
     * @param int|null $identifier Unique identifier
     *
     * @return self
     */
    public function setId(?int $identifier);

    /**
     * Get id
     *
     * If no "id" value has been set, this method will
     * set and return a default "id" value,
     * if any such value is available
     *
     * @see getDefaultId()
     *
     * @return int|null id or null if no id has been set
     */
    public function getId() : ?int ;

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" has been set, false if not
     */
    public function hasId() : bool;

    /**
     * Get a default "id" value, if any is available
     *
     * @return int|null Default "id" value or null if no default value is available
     */
    public function getDefaultId() : ?int;
}