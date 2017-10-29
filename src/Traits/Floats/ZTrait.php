<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Z Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\ZAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait ZTrait
{
    /**
     * Co-ordinate or value
     *
     * @var float|null
     */
    protected $z = null;

    /**
     * Set z
     *
     * @param float|null $value Co-ordinate or value
     *
     * @return self
     */
    public function setZ(?float $value)
    {
        $this->z = $value;

        return $this;
    }

    /**
     * Get z
     *
     * If no "z" value has been set, this method will
     * set and return a default "z" value,
     * if any such value is available
     *
     * @see getDefaultZ()
     *
     * @return float|null z or null if no z has been set
     */
    public function getZ() : ?float 
    {
        if ( ! $this->hasZ()) {
            $this->setZ($this->getDefaultZ());
        }
        return $this->z;
    }

    /**
     * Check if "z" has been set
     *
     * @return bool True if "z" has been set, false if not
     */
    public function hasZ() : bool
    {
        return isset($this->z);
    }

    /**
     * Get a default "z" value, if any is available
     *
     * @return float|null Default "z" value or null if no default value is available
     */
    public function getDefaultZ() : ?float
    {
        return null;
    }
}