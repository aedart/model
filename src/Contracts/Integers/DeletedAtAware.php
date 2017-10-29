<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Deleted At Aware</h1>
 *
 * Component is aware of a int "deleted at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DeletedAtAware
{
    /**
     * Set deleted at
     *
     * @param int|null $date Date of when this component, entity or resource was deleted
     *
     * @return self
     */
    public function setDeletedAt(?int $date);

    /**
     * Get deleted at
     *
     * If no "deleted at" value has been set, this method will
     * set and return a default "deleted at" value,
     * if any such value is available
     *
     * @see getDefaultDeletedAt()
     *
     * @return int|null deleted at or null if no deleted at has been set
     */
    public function getDeletedAt() : ?int ;

    /**
     * Check if "deleted at" has been set
     *
     * @return bool True if "deleted at" has been set, false if not
     */
    public function hasDeletedAt() : bool;

    /**
     * Get a default "deleted at" value, if any is available
     *
     * @return int|null Default "deleted at" value or null if no default value is available
     */
    public function getDefaultDeletedAt() : ?int;
}