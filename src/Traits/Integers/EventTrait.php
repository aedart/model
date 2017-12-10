<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Event Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\EventAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait EventTrait
{
    /**
     * Event name or identifier
     *
     * @var int|null
     */
    protected $event = null;

    /**
     * Set event
     *
     * @param int|null $identifier Event name or identifier
     *
     * @return self
     */
    public function setEvent(?int $identifier)
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
     * @return int|null event or null if no event has been set
     */
    public function getEvent() : ?int 
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
     * @return int|null Default "event" value or null if no default value is available
     */
    public function getDefaultEvent() : ?int
    {
        return null;
    }
}