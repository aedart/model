<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $type The type of card, e.g. VISA, MasterCard, Playing Card, Magic Card... etc
     *
     * @return self
     */
    public function setCardType(?string $type)
    {
        $this->cardType = $type;

        return $this;
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
     * @return string|null card type or null if no card type has been set
     */
    public function getCardType() : ?string 
    {
        if ( ! $this->hasCardType()) {
            $this->setCardType($this->getDefaultCardType());
        }
        return $this->cardType;
    }

    /**
     * Check if "card type" has been set
     *
     * @return bool True if "card type" has been set, false if not
     */
    public function hasCardType() : bool
    {
        return isset($this->cardType);
    }

    /**
     * Get a default "card type" value, if any is available
     *
     * @return string|null Default "card type" value or null if no default value is available
     */
    public function getDefaultCardType() : ?string
    {
        return null;
    }
}