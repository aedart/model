<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Message Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\MessageAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait MessageTrait
{
    /**
     * A message
     *
     * @var string|null
     */
    protected $message = null;

    /**
     * Set message
     *
     * @param string|null $message A message
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * If no "message" value has been set, this method will
     * set and return a default "message" value,
     * if any such value is available
     *
     * @see getDefaultMessage()
     *
     * @return string|null message or null if no message has been set
     */
    public function getMessage() : ?string 
    {
        if ( ! $this->hasMessage()) {
            $this->setMessage($this->getDefaultMessage());
        }
        return $this->message;
    }

    /**
     * Check if "message" has been set
     *
     * @return bool True if "message" has been set, false if not
     */
    public function hasMessage() : bool
    {
        return isset($this->message);
    }

    /**
     * Get a default "message" value, if any is available
     *
     * @return string|null Default "message" value or null if no default value is available
     */
    public function getDefaultMessage() : ?string
    {
        return null;
    }
}