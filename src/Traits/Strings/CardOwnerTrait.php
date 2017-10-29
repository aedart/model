<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Card Owner Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\CardOwnerAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait CardOwnerTrait
{
    /**
     * Name of the card owner (cardholder)
     *
     * @var string|null
     */
    protected $cardOwner = null;

    /**
     * Set card owner
     *
     * @param string|null $name Name of the card owner (cardholder)
     *
     * @return self
     */
    public function setCardOwner(?string $name)
    {
        $this->cardOwner = $name;

        return $this;
    }

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
    public function getCardOwner() : ?string 
    {
        if ( ! $this->hasCardOwner()) {
            $this->setCardOwner($this->getDefaultCardOwner());
        }
        return $this->cardOwner;
    }

    /**
     * Check if "card owner" has been set
     *
     * @return bool True if "card owner" has been set, false if not
     */
    public function hasCardOwner() : bool
    {
        return isset($this->cardOwner);
    }

    /**
     * Get a default "card owner" value, if any is available
     *
     * @return string|null Default "card owner" value or null if no default value is available
     */
    public function getDefaultCardOwner() : ?string
    {
        return null;
    }
}