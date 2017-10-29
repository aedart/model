<?php

namespace Aedart\Model\Contracts\Integers;

/**
 * <h1>Birthdate Aware</h1>
 *
 * Component is aware of a int "birthdate" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Integers
 */
interface BirthdateAware
{
    /**
     * Set birthdate
     *
     * @param int|null $date Date of birth
     *
     * @return self
     */
    public function setBirthdate(?int $date);

    /**
     * Get birthdate
     *
     * If no "birthdate" value has been set, this method will
     * set and return a default "birthdate" value,
     * if any such value is available
     *
     * @see getDefaultBirthdate()
     *
     * @return int|null birthdate or null if no birthdate has been set
     */
    public function getBirthdate() : ?int ;

    /**
     * Check if "birthdate" has been set
     *
     * @return bool True if "birthdate" has been set, false if not
     */
    public function hasBirthdate() : bool;

    /**
     * Get a default "birthdate" value, if any is available
     *
     * @return int|null Default "birthdate" value or null if no default value is available
     */
    public function getDefaultBirthdate() : ?int;
}