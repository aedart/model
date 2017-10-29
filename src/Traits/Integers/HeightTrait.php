<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

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
     * @param int|null $amount Height of something
     *
     * @return self
     */
    public function setHeight(?int $amount)
    {
        $this->height = $amount;

        return $this;
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
     * @return int|null height or null if no height has been set
     */
    public function getHeight() : ?int 
    {
        if ( ! $this->hasHeight()) {
            $this->setHeight($this->getDefaultHeight());
        }
        return $this->height;
    }

    /**
     * Check if "height" has been set
     *
     * @return bool True if "height" has been set, false if not
     */
    public function hasHeight() : bool
    {
        return isset($this->height);
    }

    /**
     * Get a default "height" value, if any is available
     *
     * @return int|null Default "height" value or null if no default value is available
     */
    public function getDefaultHeight() : ?int
    {
        return null;
    }
}