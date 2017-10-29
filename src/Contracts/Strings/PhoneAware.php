<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Phone Aware</h1>
 *
 * Component is aware of a string "phone" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface PhoneAware
{
    /**
     * Set phone
     *
     * @param string|null $number Phone number
     *
     * @return self
     */
    public function setPhone(?string $number);

    /**
     * Get phone
     *
     * If no "phone" value has been set, this method will
     * set and return a default "phone" value,
     * if any such value is available
     *
     * @see getDefaultPhone()
     *
     * @return string|null phone or null if no phone has been set
     */
    public function getPhone() : ?string ;

    /**
     * Check if "phone" has been set
     *
     * @return bool True if "phone" has been set, false if not
     */
    public function hasPhone() : bool;

    /**
     * Get a default "phone" value, if any is available
     *
     * @return string|null Default "phone" value or null if no default value is available
     */
    public function getDefaultPhone() : ?string;
}