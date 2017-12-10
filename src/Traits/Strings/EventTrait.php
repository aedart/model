<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Event Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EventAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EventTrait
{
    /**
     * Event name or identifier
     *
     * @var string|null
     */
    protected $event = null;

    /**
     * Set event
     *
     * @param string|null $identifier Event name or identifier
     *
     * @return self
     */
    public function setEvent(?string $identifier)
    {
        $this->event = $identifier;

        return $this;
    }

    /**
     * Get event
     *
     * If no "event" value has been set, this method will
     * set and return a default "event" value,
     * if any such value is available
     *
     * @see getDefaultEvent()
     *
     * @return string|null event or null if no event has been set
     */
    public function getEvent() : ?string 
    {
        if ( ! $this->hasEvent()) {
            $this->setEvent($this->getDefaultEvent());
        }
        return $this->event;
    }

    /**
     * Check if "event" has been set
     *
     * @return bool True if "event" has been set, false if not
     */
    public function hasEvent() : bool
    {
        return isset($this->event);
    }

    /**
     * Get a default "event" value, if any is available
     *
     * @return string|null Default "event" value or null if no default value is available
     */
    public function getDefaultEvent() : ?string
    {
        return null;
    }
}