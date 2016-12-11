<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Height Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\HeightAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait HeightTrait
{
    /**
     * Height of something
     *
     * @var int|null
     */
    protected $height = null;

    /**
     * Set height
     *
     * @param int $amount Height of something
     *
     * @return void
     */
    public function setHeight($amount)
    {
        $this->height = (int) $amount;
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
     * @return int|null "height" value or null if no "height" value has been set
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
     * @return int|null A default "height" value or null if no default value is available
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