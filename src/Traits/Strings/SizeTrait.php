<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Size Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SizeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SizeTrait
{
    /**
     * The size of something
     *
     * @var string|null
     */
    protected $size = null;

    /**
     * Set size
     *
     * @param string|null $size The size of something
     *
     * @return self
     */
    public function setSize(?string $size)
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
     * @return string|null size or null if no size has been set
     */
    public function getSize() : ?string 
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
     * @return string|null Default "size" value or null if no default value is available
     */
    public function getDefaultSize() : ?string
    {
        return null;
    }
}