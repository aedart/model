<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Alias Aware</h1>
 *
 * Component is aware of a string "alias" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface AliasAware
{
    /**
     * Set alias
     *
     * @param string|null $name An alternate name of an item or component
     *
     * @return self
     */
    public function setAlias(?string $name);

    /**
     * Get alias
     *
     * If no "alias" value has been set, this method will
     * set and return a default "alias" value,
     * if any such value is available
     *
     * @see getDefaultAlias()
     *
     * @return string|null alias or null if no alias has been set
     */
    public function getAlias() : ?string ;

    /**
     * Check if "alias" has been set
     *
     * @return bool True if "alias" has been set, false if not
     */
    public function hasAlias() : bool;

    /**
     * Get a default "alias" value, if any is available
     *
     * @return string|null Default "alias" value or null if no default value is available
     */
    public function getDefaultAlias() : ?string;
}