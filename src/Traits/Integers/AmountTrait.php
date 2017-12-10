<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Amount Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\AmountAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait AmountTrait
{
    /**
     * The quantity of something
     *
     * @var int|null
     */
    protected $amount = null;

    /**
     * Set amount
     *
     * @param int|null $amount The quantity of something
     *
     * @return self
     */
    public function setAmount(?int $amount)
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
     * @return int|null amount or null if no amount has been set
     */
    public function getAmount() : ?int 
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
     * @return int|null Default "amount" value or null if no default value is available
     */
    public function getDefaultAmount() : ?int
    {
        return null;
    }
}