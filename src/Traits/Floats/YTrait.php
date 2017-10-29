<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Y Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\YAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait YTrait
{
    /**
     * Co-ordinate or value
     *
     * @var float|null
     */
    protected $y = null;

    /**
     * Set y
     *
     * @param float|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setY(?float $value)
    {
        $this->y = $value;

        return $this;
    }

    /**
     * Get y
     *
     * If no "y" value has been set, this method will
     * set and return a default "y" value,
     * if any such value is available
     *
     * @see getDefaultY()
     *
     * @return float|null y or null if no y has been set
     */
    public function getY() : ?float 
    {
        if ( ! $this->hasY()) {
            $this->setY($this->getDefaultY());
        }
        return $this->y;
    }

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" has been set, false if not
     */
    public function hasY() : bool
    {
        return isset($this->y);
    }

    /**
     * Get a default "y" value, if any is available
     *
     * @return float|null Default "y" value or null if no default value is available
     */
    public function getDefaultY() : ?float
    {
        return null;
    }
}