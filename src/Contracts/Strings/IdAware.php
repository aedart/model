<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Id Aware</h1>
 *
 * Component is aware of a string "id" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface IdAware
{
    /**
     * Set id
     *
     * @param string|null $identifier Unique identifier
     *
     * @return self
     */
    public function setId(?string $identifier);

    /**
     * Get id
     *
     * If no "id" value has been set, this method will
     * set and return a default "id" value,
     * if any such value is available
     *
     * @see getDefaultId()
     *
     * @return string|null id or null if no id has been set
     */
    public function getId() : ?string ;

    /**
     * Check if "id" has been set
     *
     * @return bool True if "id" has been set, false if not
     */
    public function hasId() : bool;

    /**
     * Get a default "id" value, if any is available
     *
     * @return string|null Default "id" value or null if no default value is available
     */
    public function getDefaultId() : ?string;
}