<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Deceased At Aware</h1>
 *
 * Component is aware of a string "deceased at" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface DeceasedAtAware
{
    /**
     * Set deceased at
     *
     * @param string|null $date Date of when person, animal of something has died
     *
     * @return self
     */
    public function setDeceasedAt(?string $date);

    /**
     * Get deceased at
     *
     * If no "deceased at" value has been set, this method will
     * set and return a default "deceased at" value,
     * if any such value is available
     *
     * @see getDefaultDeceasedAt()
     *
     * @return string|null deceased at or null if no deceased at has been set
     */
    public function getDeceasedAt() : ?string ;

    /**
     * Check if "deceased at" has been set
     *
     * @return bool True if "deceased at" has been set, false if not
     */
    public function hasDeceasedAt() : bool;

    /**
     * Get a default "deceased at" value, if any is available
     *
     * @return string|null Default "deceased at" value or null if no default value is available
     */
    public function getDefaultDeceasedAt() : ?string;
}