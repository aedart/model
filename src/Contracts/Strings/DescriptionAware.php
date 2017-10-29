<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Description Aware</h1>
 *
 * Component is aware of a string "description" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DescriptionAware
{
    /**
     * Set description
     *
     * @param string|null $description Description
     *
     * @return self
     */
    public function setDescription(?string $description);

    /**
     * Get description
     *
     * If no "description" value has been set, this method will
     * set and return a default "description" value,
     * if any such value is available
     *
     * @see getDefaultDescription()
     *
     * @return string|null description or null if no description has been set
     */
    public function getDescription() : ?string ;

    /**
     * Check if "description" has been set
     *
     * @return bool True if "description" has been set, false if not
     */
    public function hasDescription() : bool;

    /**
     * Get a default "description" value, if any is available
     *
     * @return string|null Default "description" value or null if no default value is available
     */
    public function getDefaultDescription() : ?string;
}