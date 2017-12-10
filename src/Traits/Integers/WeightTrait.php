<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Weight Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\WeightAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait WeightTrait
{
    /**
     * Weight of something
     *
     * @var int|null
     */
    protected $weight = null;

    /**
     * Set weight
     *
     * @param int|null $amount Weight of something
     *
     * @return self
     */
    public function setWeight(?int $amount)
    {
        $this->weight = $amount;

        return $this;
    }

    /**
     * Get weight
     *
     * If no "weight" value has been set, this method will
     * set and return a default "weight" value,
     * if any such value is available
     *
     * @see getDefaultWeight()
     *
     * @return int|null weight or null if no weight has been set
     */
    public function getWeight() : ?int 
    {
        if ( ! $this->hasWeight()) {
            $this->setWeight($this->getDefaultWeight());
        }
        return $this->weight;
    }

    /**
     * Check if "weight" has been set
     *
     * @return bool True if "weight" has been set, false if not
     */
    public function hasWeight() : bool
    {
        return isset($this->weight);
    }

    /**
     * Get a default "weight" value, if any is available
     *
     * @return int|null Default "weight" value or null if no default value is available
     */
    public function getDefaultWeight() : ?int
    {
        return null;
    }
}