<?php namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Height Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\HeightAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait HeightTrait
{
    /**
     * Height of something
     *
     * @var float|null
     */
    protected $height = null;

    /**
     * Set height
     *
     * @param float $amount Height of something
     *
     * @return void
     */
    public function setHeight($amount)
    {
        $this->height = (float) $amount;
    }

    /**
     * Get height
     *
     * If no "height" value has been set, this method will
     * set and return a default "height" value,
     * if any such value is available
     *
     * @see getDefaultHeight()
     *
     * @return float|null "height" value or null if no "height" value has been set
     */
    public function getHeight()
    {
        if (!$this->hasHeight() && $this->hasDefaultHeight()) {
            $this->setHeight($this->getDefaultHeight());
        }
        return $this->height;
    }

    /**
     * Get a default "height" value, if any is available
     *
     * @return float|null A default "height" value or null if no default value is available
     */
    public function getDefaultHeight()
    {
        return null;
    }

    /**
     * Check if "height" has been set
     *
     * @return bool True if "height" value has been set, false if not
     */
    public function hasHeight()
    {
        return isset($this->height);
    }

    /**
     * Check if a default "height" is available or not
     *
     * @return bool True of a default "height" value is available, false if not
     */
    public function hasDefaultHeight()
    {
        $default = $this->getDefaultHeight();
        return isset($default);
    }
}