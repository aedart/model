<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $location Location, index or some other identifier of where something begins
     *
     * @return self
     */
    public function setBegin(?string $location)
    {
        $this->begin = $location;

        return $this;
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
     * @return string|null begin or null if no begin has been set
     */
    public function getBegin() : ?string 
    {
        if ( ! $this->hasBegin()) {
            $this->setBegin($this->getDefaultBegin());
        }
        return $this->begin;
    }

    /**
     * Check if "begin" has been set
     *
     * @return bool True if "begin" has been set, false if not
     */
    public function hasBegin() : bool
    {
        return isset($this->begin);
    }

    /**
     * Get a default "begin" value, if any is available
     *
     * @return string|null Default "begin" value or null if no default value is available
     */
    public function getDefaultBegin() : ?string
    {
        return null;
    }
}