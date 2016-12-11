<?php namespace Aedart\Model\Traits\Integers;

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
     * @param int $amount Depth of something
     *
     * @return void
     */
    public function setDepth($amount)
    {
        $this->depth = (int) $amount;
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
     * @return int|null "depth" value or null if no "depth" value has been set
     */
    public function getDepth()
    {
        if (!$this->hasDepth() && $this->hasDefaultDepth()) {
            $this->setDepth($this->getDefaultDepth());
        }
        return $this->depth;
    }

    /**
     * Get a default "depth" value, if any is available
     *
     * @return int|null A default "depth" value or null if no default value is available
     */
    public function getDefaultDepth()
    {
        return null;
    }

    /**
     * Check if "depth" has been set
     *
     * @return bool True if "depth" value has been set, false if not
     */
    public function hasDepth()
    {
        return isset($this->depth);
    }

    /**
     * Check if a default "depth" is available or not
     *
     * @return bool True of a default "depth" value is available, false if not
     */
    public function hasDefaultDepth()
    {
        $default = $this->getDefaultDepth();
        return isset($default);
    }
}