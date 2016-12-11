<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Width Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\WidthAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait WidthTrait
{
    /**
     * Width of something
     *
     * @var int|null
     */
    protected $width = null;

    /**
     * Set width
     *
     * @param int $amount Width of something
     *
     * @return void
     */
    public function setWidth($amount)
    {
        $this->width = (int) $amount;
    }

    /**
     * Get width
     *
     * If no "width" value has been set, this method will
     * set and return a default "width" value,
     * if any such value is available
     *
     * @see getDefaultWidth()
     *
     * @return int|null "width" value or null if no "width" value has been set
     */
    public function getWidth()
    {
        if (!$this->hasWidth() && $this->hasDefaultWidth()) {
            $this->setWidth($this->getDefaultWidth());
        }
        return $this->width;
    }

    /**
     * Get a default "width" value, if any is available
     *
     * @return int|null A default "width" value or null if no default value is available
     */
    public function getDefaultWidth()
    {
        return null;
    }

    /**
     * Check if "width" has been set
     *
     * @return bool True if "width" value has been set, false if not
     */
    public function hasWidth()
    {
        return isset($this->width);
    }

    /**
     * Check if a default "width" is available or not
     *
     * @return bool True of a default "width" value is available, false if not
     */
    public function hasDefaultWidth()
    {
        $default = $this->getDefaultWidth();
        return isset($default);
    }
}