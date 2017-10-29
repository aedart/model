<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Width Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\WidthAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait WidthTrait
{
    /**
     * Width of something
     *
     * @var float|null
     */
    protected $width = null;

    /**
     * Set width
     *
     * @param float|null $amount Width of something
     *
     * @return self
     */
    public function setWidth(?float $amount)
    {
        $this->width = $amount;

        return $this;
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
     * @return float|null width or null if no width has been set
     */
    public function getWidth() : ?float 
    {
        if ( ! $this->hasWidth()) {
            $this->setWidth($this->getDefaultWidth());
        }
        return $this->width;
    }

    /**
     * Check if "width" has been set
     *
     * @return bool True if "width" has been set, false if not
     */
    public function hasWidth() : bool
    {
        return isset($this->width);
    }

    /**
     * Get a default "width" value, if any is available
     *
     * @return float|null Default "width" value or null if no default value is available
     */
    public function getDefaultWidth() : ?float
    {
        return null;
    }
}