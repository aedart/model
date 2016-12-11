<?php namespace Aedart\Model\Traits\Mixed;

/**
 * <h1>Z Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Mixed\ZAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Mixed
 */
trait ZTrait
{
    /**
     * Some kind of value
     *
     * @var mixed|null
     */
    protected $z = null;

    /**
     * Set z
     *
     * @param mixed $value Some kind of value
     *
     * @return void
     */
    public function setZ($value)
    {
        $this->z = $value;
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
     * @return mixed|null "z" value or null if no "z" value has been set
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
     * @return mixed|null A default "z" value or null if no default value is available
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