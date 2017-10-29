<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Deceased At Aware</h1>
 *
 * Component is aware of a int "deceased at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface DeceasedAtAware
{
    /**
     * Set deceased at
     *
     * @param int|null $date Date of when person, animal of something has died
     *
     * @return self
     */
    public function setDeceasedAt(?int $date);

    /**
     * Get deceased at
     *
     * If no "deceased at" value has been set, this method will
     * set and return a default "deceased at" value,
     * if any such value is available
     *
     * @see getDefaultDeceasedAt()
     *
     * @return int|null deceased at or null if no deceased at has been set
     */
    public function getDeceasedAt() : ?int ;

    /**
     * Check if "deceased at" has been set
     *
     * @return bool True if "deceased at" has been set, false if not
     */
    public function hasDeceasedAt() : bool;

    /**
     * Get a default "deceased at" value, if any is available
     *
     * @return int|null Default "deceased at" value or null if no default value is available
     */
    public function getDefaultDeceasedAt() : ?int;
}