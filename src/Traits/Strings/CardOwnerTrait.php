<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $name Name of the card owner (cardholder)
     *
     * @return void
     */
    public function setCardOwner($name)
    {
        $this->cardOwner = (string) $name;
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
     * @return string|null "card owner" value or null if no "card owner" value has been set
     */
    public function getCardOwner()
    {
        if (!$this->hasCardOwner() && $this->hasDefaultCardOwner()) {
            $this->setCardOwner($this->getDefaultCardOwner());
        }
        return $this->cardOwner;
    }

    /**
     * Get a default "card owner" value, if any is available
     *
     * @return string|null A default "card owner" value or null if no default value is available
     */
    public function getDefaultCardOwner()
    {
        return null;
    }

    /**
     * Check if "card owner" has been set
     *
     * @return bool True if "card owner" value has been set, false if not
     */
    public function hasCardOwner()
    {
        return isset($this->cardOwner);
    }

    /**
     * Check if a default "card owner" is available or not
     *
     * @return bool True of a default "card owner" value is available, false if not
     */
    public function hasDefaultCardOwner()
    {
        $default = $this->getDefaultCardOwner();
        return isset($default);
    }
}