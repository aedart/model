<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Size Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\SizeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait SizeTrait
{
    /**
     * The size of something
     *
     * @var int|null
     */
    protected $size = null;

    /**
     * Set size
     *
     * @param int|null $size The size of something
     *
     * @return self
     */
    public function setSize(?int $size)
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
     * @return int|null size or null if no size has been set
     */
    public function getSize() : ?int 
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
     * @return int|null Default "size" value or null if no default value is available
     */
    public function getDefaultSize() : ?int
    {
        return null;
    }
}