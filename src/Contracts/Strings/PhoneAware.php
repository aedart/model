<?php namespace Aedart\Model\Contracts\Strings;

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
     * @param string $number Phone number
     *
     * @return void
     */
    public function setPhone($number);

    /**
     * Get phone
     *
     * If no "phone" value has been set, this method will
     * set and return a default "phone" value,
     * if any such value is available
     *
     * @see getDefaultPhone()
     *
     * @return string|null "phone" value or null if no "phone" value has been set
     */
    public function getPhone();

    /**
     * Get a default "phone" value, if any is available
     *
     * @return string|null A default "phone" value or null if no default value is available
     */
    public function getDefaultPhone();

    /**
     * Check if "phone" has been set
     *
     * @return bool True if "phone" value has been set, false if not
     */
    public function hasPhone();

    /**
     * Check if a default "phone" is available or not
     *
     * @return bool True of a default "phone" value is available, false if not
     */
    public function hasDefaultPhone();
}