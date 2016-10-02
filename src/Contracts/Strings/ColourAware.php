<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Colour Aware</h1>
 *
 * Component is aware of a string "colour" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface ColourAware
{
    /**
     * Set colour
     *
     * @param string $value Name of a colour or colour value, e.g. rgb, cmyk, hsl or other format
     *
     * @return void
     */
    public function setColour($value);

    /**
     * Get colour
     *
     * If no "colour" value has been set, this method will
     * set and return a default "colour" value,
     * if any such value is available
     *
     * @see getDefaultColour()
     *
     * @return string|null "colour" value or null if no "colour" value has been set
     */
    public function getColour();

    /**
     * Get a default "colour" value, if any is available
     *
     * @return string|null A default "colour" value or null if no default value is available
     */
    public function getDefaultColour();

    /**
     * Check if "colour" has been set
     *
     * @return bool True if "colour" value has been set, false if not
     */
    public function hasColour();

    /**
     * Check if a default "colour" is available or not
     *
     * @return bool True of a default "colour" value is available, false if not
     */
    public function hasDefaultColour();
}