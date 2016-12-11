<?php namespace Aedart\Model\Traits\Floats;

/**
 * <h1>X Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\XAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait XTrait
{
    /**
     * Co-ordinate or value
     *
     * @var float|null
     */
    protected $x = null;

    /**
     * Set x
     *
     * @param float $value Co-ordinate or value
     *
     * @return void
     */
    public function setX($value)
    {
        $this->x = (float) $value;
    }

    /**
     * Get x
     *
     * If no "x" value has been set, this method will
     * set and return a default "x" value,
     * if any such value is available
     *
     * @see getDefaultX()
     *
     * @return float|null "x" value or null if no "x" value has been set
     */
    public function getX()
    {
        if (!$this->hasX() && $this->hasDefaultX()) {
            $this->setX($this->getDefaultX());
        }
        return $this->x;
    }

    /**
     * Get a default "x" value, if any is available
     *
     * @return float|null A default "x" value or null if no default value is available
     */
    public function getDefaultX()
    {
        return null;
    }

    /**
     * Check if "x" has been set
     *
     * @return bool True if "x" value has been set, false if not
     */
    public function hasX()
    {
        return isset($this->x);
    }

    /**
     * Check if a default "x" is available or not
     *
     * @return bool True of a default "x" value is available, false if not
     */
    public function hasDefaultX()
    {
        $default = $this->getDefaultX();
        return isset($default);
    }
}