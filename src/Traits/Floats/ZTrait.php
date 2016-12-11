<?php namespace Aedart\Model\Traits\Floats;

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
     * @param float $value Co-ordinate or value
     *
     * @return void
     */
    public function setZ($value)
    {
        $this->z = (float) $value;
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
     * @return float|null "z" value or null if no "z" value has been set
     */
    public function getZ()
    {
        if (!$this->hasZ() && $this->hasDefaultZ()) {
            $this->setZ($this->getDefaultZ());
        }
        return $this->z;
    }

    /**
     * Get a default "z" value, if any is available
     *
     * @return float|null A default "z" value or null if no default value is available
     */
    public function getDefaultZ()
    {
        return null;
    }

    /**
     * Check if "z" has been set
     *
     * @return bool True if "z" value has been set, false if not
     */
    public function hasZ()
    {
        return isset($this->z);
    }

    /**
     * Check if a default "z" is available or not
     *
     * @return bool True of a default "z" value is available, false if not
     */
    public function hasDefaultZ()
    {
        $default = $this->getDefaultZ();
        return isset($default);
    }
}