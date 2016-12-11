<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Z Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\ZAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait ZTrait
{
    /**
     * Co-ordinate or value
     *
     * @var int|null
     */
    protected $z = null;

    /**
     * Set z
     *
     * @param int $value Co-ordinate or value
     *
     * @return void
     */
    public function setZ($value)
    {
        $this->z = (int) $value;
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
     * @return int|null "z" value or null if no "z" value has been set
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
     * @return int|null A default "z" value or null if no default value is available
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