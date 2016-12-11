<?php namespace Aedart\Model\Traits\Integers;

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
     * @param int $amount Length of something
     *
     * @return void
     */
    public function setLength($amount)
    {
        $this->length = (int) $amount;
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
     * @return int|null "length" value or null if no "length" value has been set
     */
    public function getLength()
    {
        if (!$this->hasLength() && $this->hasDefaultLength()) {
            $this->setLength($this->getDefaultLength());
        }
        return $this->length;
    }

    /**
     * Get a default "length" value, if any is available
     *
     * @return int|null A default "length" value or null if no default value is available
     */
    public function getDefaultLength()
    {
        return null;
    }

    /**
     * Check if "length" has been set
     *
     * @return bool True if "length" value has been set, false if not
     */
    public function hasLength()
    {
        return isset($this->length);
    }

    /**
     * Check if a default "length" is available or not
     *
     * @return bool True of a default "length" value is available, false if not
     */
    public function hasDefaultLength()
    {
        $default = $this->getDefaultLength();
        return isset($default);
    }
}