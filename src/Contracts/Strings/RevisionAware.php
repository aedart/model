<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Revision Aware</h1>
 *
 * Component is aware of a string "revision" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface RevisionAware
{
    /**
     * Set revision
     *
     * @param string $revision A revision, path number or other identifier
     *
     * @return void
     */
    public function setRevision($revision);

    /**
     * Get revision
     *
     * If no "revision" value has been set, this method will
     * set and return a default "revision" value,
     * if any such value is available
     *
     * @see getDefaultRevision()
     *
     * @return string|null "revision" value or null if no "revision" value has been set
     */
    public function getRevision();

    /**
     * Get a default "revision" value, if any is available
     *
     * @return string|null A default "revision" value or null if no default value is available
     */
    public function getDefaultRevision();

    /**
     * Check if "revision" has been set
     *
     * @return bool True if "revision" value has been set, false if not
     */
    public function hasRevision();

    /**
     * Check if a default "revision" is available or not
     *
     * @return bool True of a default "revision" value is available, false if not
     */
    public function hasDefaultRevision();
}