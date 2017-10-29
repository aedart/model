<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Topic Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TopicAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TopicTrait
{
    /**
     * Name of topic
     *
     * @var string|null
     */
    protected $topic = null;

    /**
     * Set topic
     *
     * @param string|null $name Name of topic
     *
     * @return self
     */
    public function setTopic(?string $name)
    {
        $this->topic = $name;

        return $this;
    }

    /**
     * Get topic
     *
     * If no "topic" value has been set, this method will
     * set and return a default "topic" value,
     * if any such value is available
     *
     * @see getDefaultTopic()
     *
     * @return string|null topic or null if no topic has been set
     */
    public function getTopic() : ?string 
    {
        if ( ! $this->hasTopic()) {
            $this->setTopic($this->getDefaultTopic());
        }
        return $this->topic;
    }

    /**
     * Check if "topic" has been set
     *
     * @return bool True if "topic" has been set, false if not
     */
    public function hasTopic() : bool
    {
        return isset($this->topic);
    }

    /**
     * Get a default "topic" value, if any is available
     *
     * @return string|null Default "topic" value or null if no default value is available
     */
    public function getDefaultTopic() : ?string
    {
        return null;
    }
}