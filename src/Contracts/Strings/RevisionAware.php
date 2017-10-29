<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $revision A revision, batch number or other identifier
     *
     * @return self
     */
    public function setRevision(?string $revision);

    /**
     * Get revision
     *
     * If no "revision" value has been set, this method will
     * set and return a default "revision" value,
     * if any such value is available
     *
     * @see getDefaultRevision()
     *
     * @return string|null revision or null if no revision has been set
     */
    public function getRevision() : ?string ;

    /**
     * Check if "revision" has been set
     *
     * @return bool True if "revision" has been set, false if not
     */
    public function hasRevision() : bool;

    /**
     * Get a default "revision" value, if any is available
     *
     * @return string|null Default "revision" value or null if no default value is available
     */
    public function getDefaultRevision() : ?string;
}