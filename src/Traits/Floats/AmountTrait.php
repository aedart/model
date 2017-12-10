<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Amount Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\AmountAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait AmountTrait
{
    /**
     * The quantity of something
     *
     * @var float|null
     */
    protected $amount = null;

    /**
     * Set amount
     *
     * @param float|null $amount The quantity of something
     *
     * @return self
     */
    public function setAmount(?float $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * If no "amount" value has been set, this method will
     * set and return a default "amount" value,
     * if any such value is available
     *
     * @see getDefaultAmount()
     *
     * @return float|null amount or null if no amount has been set
     */
    public function getAmount() : ?float 
    {
        if ( ! $this->hasAmount()) {
            $this->setAmount($this->getDefaultAmount());
        }
        return $this->amount;
    }

    /**
     * Check if "amount" has been set
     *
     * @return bool True if "amount" has been set, false if not
     */
    public function hasAmount() : bool
    {
        return isset($this->amount);
    }

    /**
     * Get a default "amount" value, if any is available
     *
     * @return float|null Default "amount" value or null if no default value is available
     */
    public function getDefaultAmount() : ?float
    {
        return null;
    }
}