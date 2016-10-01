<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Source Aware</h1>
 *
 * Component is aware of a string "source" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface SourceAware
{
    /**
     * Set source
     *
     * @param string $source The source of something. E.g. location, reference, index key, or other identifier that can be used to determine the source
     *
     * @return void
     */
    public function setSource($source);

    /**
     * Get source
     *
     * If no "source" value has been set, this method will
     * set and return a default "source" value,
     * if any such value is available
     *
     * @see getDefaultSource()
     *
     * @return string|null "source" value or null if no "source" value has been set
     */
    public function getSource();

    /**
     * Get a default "source" value, if any is available
     *
     * @return string|null A default "source" value or null if no default value is available
     */
    public function getDefaultSource();

    /**
     * Check if "source" has been set
     *
     * @return bool True if "source" value has been set, false if not
     */
    public function hasSource();

    /**
     * Check if a default "source" is available or not
     *
     * @return bool True of a default "source" value is available, false if not
     */
    public function hasDefaultSource();
}