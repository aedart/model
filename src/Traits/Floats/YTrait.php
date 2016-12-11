<?php namespace Aedart\Model\Traits\Floats;

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
     * @param float $value Co-ordinate or value
     *
     * @return void
     */
    public function setY($value)
    {
        $this->y = (float) $value;
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
     * @return float|null "y" value or null if no "y" value has been set
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
     * @return float|null A default "y" value or null if no default value is available
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