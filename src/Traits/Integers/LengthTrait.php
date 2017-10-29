<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Length Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\LengthAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait LengthTrait
{
    /**
     * Length of something
     *
     * @var int|null
     */
    protected $length = null;

    /**
     * Set length
     *
     * @param int|null $amount Length of something
     *
     * @return self
     */
    public function setLength(?int $amount)
    {
        $this->length = $amount;

        return $this;
    }

    /**
     * Get length
     *
     * If no "length" value has been set, this method will
     * set and return a default "length" value,
     * if any such value is available
     *
     * @see getDefaultLength()
     *
     * @return int|null length or null if no length has been set
     */
    public function getLength() : ?int 
    {
        if ( ! $this->hasLength()) {
            $this->setLength($this->getDefaultLength());
        }
        return $this->length;
    }

    /**
     * Check if "length" has been set
     *
     * @return bool True if "length" has been set, false if not
     */
    public function hasLength() : bool
    {
        return isset($this->length);
    }

    /**
     * Get a default "length" value, if any is available
     *
     * @return int|null Default "length" value or null if no default value is available
     */
    public function getDefaultLength() : ?int
    {
        return null;
    }
}