<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Size Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\SizeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait SizeTrait
{
    /**
     * The size of something
     *
     * @var float|null
     */
    protected $size = null;

    /**
     * Set size
     *
     * @param float|null $size The size of something
     *
     * @return self
     */
    public function setSize(?float $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * If no "size" value has been set, this method will
     * set and return a default "size" value,
     * if any such value is available
     *
     * @see getDefaultSize()
     *
     * @return float|null size or null if no size has been set
     */
    public function getSize() : ?float 
    {
        if ( ! $this->hasSize()) {
            $this->setSize($this->getDefaultSize());
        }
        return $this->size;
    }

    /**
     * Check if "size" has been set
     *
     * @return bool True if "size" has been set, false if not
     */
    public function hasSize() : bool
    {
        return isset($this->size);
    }

    /**
     * Get a default "size" value, if any is available
     *
     * @return float|null Default "size" value or null if no default value is available
     */
    public function getDefaultSize() : ?float
    {
        return null;
    }
}