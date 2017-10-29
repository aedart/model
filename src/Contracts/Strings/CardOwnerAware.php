<?php

namespace Aedart\Model\Contracts\Strings;

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
     * @param string|null $name Name of the card owner (cardholder)
     *
     * @return self
     */
    public function setCardOwner(?string $name);

    /**
     * Get card owner
     *
     * If no "card owner" value has been set, this method will
     * set and return a default "card owner" value,
     * if any such value is available
     *
     * @see getDefaultCardOwner()
     *
     * @return string|null card owner or null if no card owner has been set
     */
    public function getCardOwner() : ?string ;

    /**
     * Check if "card owner" has been set
     *
     * @return bool True if "card owner" has been set, false if not
     */
    public function hasCardOwner() : bool;

    /**
     * Get a default "card owner" value, if any is available
     *
     * @return string|null Default "card owner" value or null if no default value is available
     */
    public function getDefaultCardOwner() : ?string;
}