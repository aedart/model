<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Mixed;

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
     * @return self
     */
    public function setY($value)
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
     * @return mixed|null "y" value or null if no "y" value has been set
     */
    public function getY()
    {
        if ( ! $this->hasY()) {
            $this->setY($this->getDefaultY());
        }
        return $this->y;
    }

    /**
     * Check if "y" has been set
     *
     * @return bool True if "y" value has been set, false if not
     */
    public function hasY() : bool
    {
        return isset($this->y);
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
}