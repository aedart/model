<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Begin Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\BeginAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait BeginTrait
{
    /**
     * Location, index or some other identifier of where something begins
     *
     * @var string|null
     */
    protected $begin = null;

    /**
     * Set begin
     *
     * @param string $location Location, index or some other identifier of where something begins
     *
     * @return void
     */
    public function setBegin($location)
    {
        $this->begin = (string) $location;
    }

    /**
     * Get begin
     *
     * If no "begin" value has been set, this method will
     * set and return a default "begin" value,
     * if any such value is available
     *
     * @see getDefaultBegin()
     *
     * @return string|null "begin" value or null if no "begin" value has been set
     */
    public function getBegin()
    {
        if (!$this->hasBegin() && $this->hasDefaultBegin()) {
            $this->setBegin($this->getDefaultBegin());
        }
        return $this->begin;
    }

    /**
     * Get a default "begin" value, if any is available
     *
     * @return string|null A default "begin" value or null if no default value is available
     */
    public function getDefaultBegin()
    {
        return null;
    }

    /**
     * Check if "begin" has been set
     *
     * @return bool True if "begin" value has been set, false if not
     */
    public function hasBegin()
    {
        return isset($this->begin);
    }

    /**
     * Check if a default "begin" is available or not
     *
     * @return bool True of a default "begin" value is available, false if not
     */
    public function hasDefaultBegin()
    {
        $default = $this->getDefaultBegin();
        return isset($default);
    }
}