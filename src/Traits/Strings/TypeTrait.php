<?php namespace Aedart\Model\Traits\Strings;


/**
 * <h1>Type Trait</h1>
 *
 * @see Aedart\Model\Contracts\Strings\TypeAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TypeTrait
{
    /**
     * The type of something
     *
     * @var string|null
     */
    protected $type = null;

    /**
     * Set the given type
     *
     * @param string $type The type of something
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = (string) $type;
    }

    /**
     * Get the given type
     *
     * If no type has been set, this method will
     * set and return a default type, if any such
     * value is available
     *
     * @see getDefaultType()
     *
     * @return string|null type or null if none type has been set
     */
    public function getType()
    {
        if (!$this->hasType() && $this->hasDefaultType()) {
            $this->setType($this->getDefaultType());
        }
        return $this->type;
    }

    /**
     * Get a default type value, if any is available
     *
     * @return string|null A default type value or Null if no default value is available
     */
    public function getDefaultType()
    {
        return null;
    }

    /**
     * Check if type has been set
     *
     * @return bool True if type has been set, false if not
     */
    public function hasType()
    {
        return !is_null($this->type);
    }

    /**
     * Check if a default type is available or not
     *
     * @return bool True of a default type is available, false if not
     */
    public function hasDefaultType()
    {
        return !is_null($this->getDefaultType());
    }
}