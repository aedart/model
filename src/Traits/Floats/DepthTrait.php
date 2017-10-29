<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Depth Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\DepthAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait DepthTrait
{
    /**
     * Depth of something
     *
     * @var float|null
     */
    protected $depth = null;

    /**
     * Set depth
     *
     * @param float|null $amount Depth of something
     *
     * @return self
     */
    public function setDepth(?float $amount)
    {
        $this->depth = $amount;

        return $this;
    }

    /**
     * Get depth
     *
     * If no "depth" value has been set, this method will
     * set and return a default "depth" value,
     * if any such value is available
     *
     * @see getDefaultDepth()
     *
     * @return float|null depth or null if no depth has been set
     */
    public function getDepth() : ?float 
    {
        if ( ! $this->hasDepth()) {
            $this->setDepth($this->getDefaultDepth());
        }
        return $this->depth;
    }

    /**
     * Check if "depth" has been set
     *
     * @return bool True if "depth" has been set, false if not
     */
    public function hasDepth() : bool
    {
        return isset($this->depth);
    }

    /**
     * Get a default "depth" value, if any is available
     *
     * @return float|null Default "depth" value or null if no default value is available
     */
    public function getDefaultDepth() : ?float
    {
        return null;
    }
}