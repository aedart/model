<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Card Type Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CardTypeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CardTypeTrait
{
    /**
     * The type of card, e.g. VISA, MasterCard, Playing Card, Magic Card... etc
     *
     * @var string|null
     */
    protected $cardType = null;

    /**
     * Set card type
     *
     * @param string $type The type of card, e.g. VISA, MasterCard, Playing Card, Magic Card... etc
     *
     * @return void
     */
    public function setCardType($type)
    {
        $this->cardType = (string) $type;
    }

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
    public function getCardType()
    {
        if (!$this->hasCardType() && $this->hasDefaultCardType()) {
            $this->setCardType($this->getDefaultCardType());
        }
        return $this->cardType;
    }

    /**
     * Get a default "card type" value, if any is available
     *
     * @return string|null A default "card type" value or null if no default value is available
     */
    public function getDefaultCardType()
    {
        return null;
    }

    /**
     * Check if "card type" has been set
     *
     * @return bool True if "card type" value has been set, false if not
     */
    public function hasCardType()
    {
        return isset($this->cardType);
    }

    /**
     * Check if a default "card type" is available or not
     *
     * @return bool True of a default "card type" value is available, false if not
     */
    public function hasDefaultCardType()
    {
        $default = $this->getDefaultCardType();
        return isset($default);
    }
}