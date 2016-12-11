<?php namespace Aedart\Model\Traits\Mixed;

/**
 * <h1>Y Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Mixed\YAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Mixed
 */
trait YTrait
{
    /**
     * Some kind of value
     *
     * @var mixed|null
     */
    protected $y = null;

    /**
     * Set y
     *
     * @param mixed $value Some kind of value
     *
     * @return void
     */
    public function setY($value)
    {
        $this->y = $value;
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
     * @return mixed|null "y" value or null if no "y" value has been set
     */
    public function getY()
    {
        if (!$this->hasY() && $this->hasDefaultY()) {
            $this->setY($this->getDefaultY());
        }
        return $this->y;
    }

    /**
     * Get a default "y" value, if any is available
     *
     * @return mixed|null A default "y" value or null if no default value is available
     */
    public function getDefaultY()
    {
        return null;
    }

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" value has been set, false if not
     */
    public function hasY()
    {
        return isset($this->y);
    }

    /**
     * Check if a default "y" is available or not
     *
     * @return bool True of a default "y" value is available, false if not
     */
    public function hasDefaultY()
    {
        $default = $this->getDefaultY();
        return isset($default);
    }
}