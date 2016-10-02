<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Card Owner Aware</h1>
 *
 * Component is aware of a string "card owner" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CardOwnerAware
{
    /**
     * Set card owner
     *
     * @param string $name Name of the card owner (cardholder)
     *
     * @return void
     */
    public function setCardOwner($name);

    /**
     * Get card owner
     *
     * If no "card owner" value has been set, this method will
     * set and return a default "card owner" value,
     * if any such value is available
     *
     * @see getDefaultCardOwner()
     *
     * @return string|null "card owner" value or null if no "card owner" value has been set
     */
    public function getCardOwner();

    /**
     * Get a default "card owner" value, if any is available
     *
     * @return string|null A default "card owner" value or null if no default value is available
     */
    public function getDefaultCardOwner();

    /**
     * Check if "card owner" has been set
     *
     * @return bool True if "card owner" value has been set, false if not
     */
    public function hasCardOwner();

    /**
     * Check if a default "card owner" is available or not
     *
     * @return bool True of a default "card owner" value is available, false if not
     */
    public function hasDefaultCardOwner();
}