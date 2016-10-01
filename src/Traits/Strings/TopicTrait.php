<?php namespace Aedart\Model\Traits\Strings;

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
     * Topic
     *
     * @var string|null
     */
    protected $topic = null;

    /**
     * Set topic
     *
     * @param string $topic Topic
     *
     * @return void
     */
    public function setTopic($topic)
    {
        $this->topic = (string) $topic;
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
     * @return string|null "topic" value or null if no "topic" value has been set
     */
    public function getTopic()
    {
        if (!$this->hasTopic() && $this->hasDefaultTopic()) {
            $this->setTopic($this->getDefaultTopic());
        }
        return $this->topic;
    }

    /**
     * Get a default "topic" value, if any is available
     *
     * @return string|null A default "topic" value or null if no default value is available
     */
    public function getDefaultTopic()
    {
        return null;
    }

    /**
     * Check if "topic" has been set
     *
     * @return bool True if "topic" value has been set, false if not
     */
    public function hasTopic()
    {
        return isset($this->topic);
    }

    /**
     * Check if a default "topic" is available or not
     *
     * @return bool True of a default "topic" value is available, false if not
     */
    public function hasDefaultTopic()
    {
        $default = $this->getDefaultTopic();
        return isset($default);
    }
}