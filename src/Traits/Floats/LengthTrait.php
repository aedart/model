<?php namespace Aedart\Model\Traits\Floats;

/**
 * <h1>Length Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Floats\LengthAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Floats
 */
trait LengthTrait
{
    /**
     * Length of something
     *
     * @var float|null
     */
    protected $length = null;

    /**
     * Set length
     *
     * @param float $amount Length of something
     *
     * @return void
     */
    public function setLength($amount)
    {
        $this->length = (float) $amount;
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
     * @return float|null "length" value or null if no "length" value has been set
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
     * @return float|null A default "length" value or null if no default value is available
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