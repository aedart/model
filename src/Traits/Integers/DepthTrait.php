<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Depth Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\DepthAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait DepthTrait
{
    /**
     * Depth of something
     *
     * @var int|null
     */
    protected $depth = null;

    /**
     * Set depth
     *
     * @param int|null $amount Depth of something
     *
     * @return self
     */
    public function setDepth(?int $amount)
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
     * @return int|null depth or null if no depth has been set
     */
    public function getDepth() : ?int 
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
     * @return int|null Default "depth" value or null if no default value is available
     */
    public function getDefaultDepth() : ?int
    {
        return null;
    }
}