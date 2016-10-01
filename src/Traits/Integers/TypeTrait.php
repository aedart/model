<?php namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Type Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\TypeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait TypeTrait
{
    /**
     * The type number of something
     *
     * @var int|null
     */
    protected $type = null;

    /**
     * Set type
     *
     * @param int $number The type number of something
     *
     * @return void
     */
    public function setType($number)
    {
        $this->type = (int) $number;
    }

    /**
     * Get type
     *
     * If no "type" value has been set, this method will
     * set and return a default "type" value,
     * if any such value is available
     *
     * @see getDefaultType()
     *
     * @return int|null "type" value or null if no "type" value has been set
     */
    public function getType()
    {
        if (!$this->hasType() && $this->hasDefaultType()) {
            $this->setType($this->getDefaultType());
        }
        return $this->type;
    }

    /**
     * Get a default "type" value, if any is available
     *
     * @return int|null A default "type" value or null if no default value is available
     */
    public function getDefaultType()
    {
        return null;
    }

    /**
     * Check if "type" has been set
     *
     * @return bool True if "type" value has been set, false if not
     */
    public function hasType()
    {
        return isset($this->type);
    }

    /**
     * Check if a default "type" is available or not
     *
     * @return bool True of a default "type" value is available, false if not
     */
    public function hasDefaultType()
    {
        $default = $this->getDefaultType();
        return isset($default);
    }
}