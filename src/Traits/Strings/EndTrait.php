<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $location Location, index or other identifier of when something ends
     *
     * @return self
     */
    public function setEnd(?string $location)
    {
        $this->end = $location;

        return $this;
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
     * @return string|null end or null if no end has been set
     */
    public function getEnd() : ?string 
    {
        if ( ! $this->hasEnd()) {
            $this->setEnd($this->getDefaultEnd());
        }
        return $this->end;
    }

    /**
     * Check if "end" has been set
     *
     * @return bool True if "end" has been set, false if not
     */
    public function hasEnd() : bool
    {
        return isset($this->end);
    }

    /**
     * Get a default "end" value, if any is available
     *
     * @return string|null Default "end" value or null if no default value is available
     */
    public function getDefaultEnd() : ?string
    {
        return null;
    }
}