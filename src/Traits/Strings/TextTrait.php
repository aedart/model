<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Text Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TextAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TextTrait
{
    /**
     * The full text content for something, e.g. an article&#039;s body text
     *
     * @var string|null
     */
    protected $text = null;

    /**
     * Set text
     *
     * @param string|null $text The full text content for something, e.g. an article&#039;s body text
     *
     * @return self
     */
    public function setText(?string $text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * If no "text" value has been set, this method will
     * set and return a default "text" value,
     * if any such value is available
     *
     * @see getDefaultText()
     *
     * @return string|null text or null if no text has been set
     */
    public function getText() : ?string 
    {
        if ( ! $this->hasText()) {
            $this->setText($this->getDefaultText());
        }
        return $this->text;
    }

    /**
     * Check if "text" has been set
     *
     * @return bool True if "text" has been set, false if not
     */
    public function hasText() : bool
    {
        return isset($this->text);
    }

    /**
     * Get a default "text" value, if any is available
     *
     * @return string|null Default "text" value or null if no default value is available
     */
    public function getDefaultText() : ?string
    {
        return null;
    }
}