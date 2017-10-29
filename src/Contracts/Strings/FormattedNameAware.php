<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Formatted Name Aware</h1>
 *
 * Component is aware of a string "formatted name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FormattedNameAware
{
    /**
     * Set formatted name
     *
     * @param string|null $name Formatted name of someone or something
     *
     * @return self
     */
    public function setFormattedName(?string $name);

    /**
     * Get formatted name
     *
     * If no "formatted name" value has been set, this method will
     * set and return a default "formatted name" value,
     * if any such value is available
     *
     * @see getDefaultFormattedName()
     *
     * @return string|null formatted name or null if no formatted name has been set
     */
    public function getFormattedName() : ?string ;

    /**
     * Check if "formatted name" has been set
     *
     * @return bool True if "formatted name" has been set, false if not
     */
    public function hasFormattedName() : bool;

    /**
     * Get a default "formatted name" value, if any is available
     *
     * @return string|null Default "formatted name" value or null if no default value is available
     */
    public function getDefaultFormattedName() : ?string;
}