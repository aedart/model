<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>End Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EndAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EndTrait
{
    /**
     * Location, index or other identifier of when something ends
     *
     * @var string|null
     */
    protected $end = null;

    /**
     * Set end
     *
     * @param string $location Location, index or other identifier of when something ends
     *
     * @return void
     */
    public function setEnd($location)
    {
        $this->end = (string) $location;
    }

    /**
     * Get end
     *
     * If no "end" value has been set, this method will
     * set and return a default "end" value,
     * if any such value is available
     *
     * @see getDefaultEnd()
     *
     * @return string|null "end" value or null if no "end" value has been set
     */
    public function getEnd()
    {
        if (!$this->hasEnd() && $this->hasDefaultEnd()) {
            $this->setEnd($this->getDefaultEnd());
        }
        return $this->end;
    }

    /**
     * Get a default "end" value, if any is available
     *
     * @return string|null A default "end" value or null if no default value is available
     */
    public function getDefaultEnd()
    {
        return null;
    }

    /**
     * Check if "end" has been set
     *
     * @return bool True if "end" value has been set, false if not
     */
    public function hasEnd()
    {
        return isset($this->end);
    }

    /**
     * Check if a default "end" is available or not
     *
     * @return bool True of a default "end" value is available, false if not
     */
    public function hasDefaultEnd()
    {
        $default = $this->getDefaultEnd();
        return isset($default);
    }
}