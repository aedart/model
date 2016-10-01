<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Content Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ContentAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ContentTrait
{
    /**
     * Content
     *
     * @var string|null
     */
    protected $content = null;

    /**
     * Set content
     *
     * @param string $content Content
     *
     * @return void
     */
    public function setContent($content)
    {
        $this->content = (string) $content;
    }

    /**
     * Get content
     *
     * If no "content" value has been set, this method will
     * set and return a default "content" value,
     * if any such value is available
     *
     * @see getDefaultContent()
     *
     * @return string|null "content" value or null if no "content" value has been set
     */
    public function getContent()
    {
        if (!$this->hasContent() && $this->hasDefaultContent()) {
            $this->setContent($this->getDefaultContent());
        }
        return $this->content;
    }

    /**
     * Get a default "content" value, if any is available
     *
     * @return string|null A default "content" value or null if no default value is available
     */
    public function getDefaultContent()
    {
        return null;
    }

    /**
     * Check if "content" has been set
     *
     * @return bool True if "content" value has been set, false if not
     */
    public function hasContent()
    {
        return isset($this->content);
    }

    /**
     * Check if a default "content" is available or not
     *
     * @return bool True of a default "content" value is available, false if not
     */
    public function hasDefaultContent()
    {
        $default = $this->getDefaultContent();
        return isset($default);
    }
}