<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Card Type Aware</h1>
 *
 * Component is aware of a string "card type" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface CardTypeAware
{
    /**
     * Set card type
     *
     * @param string $type The type of card, e.g. VISA, MasterCard, Playing Card, Magic Card... etc
     *
     * @return void
     */
    public function setCardType($type);

    /**
     * Get card type
     *
     * If no "card type" value has been set, this method will
     * set and return a default "card type" value,
     * if any such value is available
     *
     * @see getDefaultCardType()
     *
     * @return string|null "card type" value or null if no "card type" value has been set
     */
    public function getCardType();

    /**
     * Get a default "card type" value, if any is available
     *
     * @return string|null A default "card type" value or null if no default value is available
     */
    public function getDefaultCardType();

    /**
     * Check if "card type" has been set
     *
     * @return bool True if "card type" value has been set, false if not
     */
    public function hasCardType();

    /**
     * Check if a default "card type" is available or not
     *
     * @return bool True of a default "card type" value is available, false if not
     */
    public function hasDefaultCardType();
}