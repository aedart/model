<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Format Aware</h1>
 *
 * Component is aware of a string "format" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface FormatAware
{
    /**
     * Set format
     *
     * @param string|null $format The shape, size and presentation or medium of an item or component
     *
     * @return self
     */
    public function setFormat(?string $format);

    /**
     * Get format
     *
     * If no "format" value has been set, this method will
     * set and return a default "format" value,
     * if any such value is available
     *
     * @see getDefaultFormat()
     *
     * @return string|null format or null if no format has been set
     */
    public function getFormat() : ?string ;

    /**
     * Check if "format" has been set
     *
     * @return bool True if "format" has been set, false if not
     */
    public function hasFormat() : bool;

    /**
     * Get a default "format" value, if any is available
     *
     * @return string|null Default "format" value or null if no default value is available
     */
    public function getDefaultFormat() : ?string;
}