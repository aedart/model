<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Label Aware</h1>
 *
 * Component is aware of a string "label" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface LabelAware
{
    /**
     * Set label
     *
     * @param string|null $name Label name
     *
     * @return self
     */
    public function setLabel(?string $name);

    /**
     * Get label
     *
     * If no "label" value has been set, this method will
     * set and return a default "label" value,
     * if any such value is available
     *
     * @see getDefaultLabel()
     *
     * @return string|null label or null if no label has been set
     */
    public function getLabel() : ?string ;

    /**
     * Check if "label" has been set
     *
     * @return bool True if "label" has been set, false if not
     */
    public function hasLabel() : bool;

    /**
     * Get a default "label" value, if any is available
     *
     * @return string|null Default "label" value or null if no default value is available
     */
    public function getDefaultLabel() : ?string;
}