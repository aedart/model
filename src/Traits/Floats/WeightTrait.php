<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Weight Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\WeightAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait WeightTrait
{
    /**
     * Weight of something
     *
     * @var float|null
     */
    protected $weight = null;

    /**
     * Set weight
     *
     * @param float|null $amount Weight of something
     *
     * @return self
     */
    public function setWeight(?float $amount)
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
     * @return float|null weight or null if no weight has been set
     */
    public function getWeight() : ?float 
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
     * @return float|null Default "weight" value or null if no default value is available
     */
    public function getDefaultWeight() : ?float
    {
        return null;
    }
}