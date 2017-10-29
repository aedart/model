<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Language Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LanguageAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LanguageTrait
{
    /**
     * Name or identifier of a language
     *
     * @var string|null
     */
    protected $language = null;

    /**
     * Set language
     *
     * @param string|null $identifier Name or identifier of a language
     *
     * @return self
     */
    public function setLanguage(?string $identifier)
    {
        $this->language = $identifier;

        return $this;
    }

    /**
     * Get language
     *
     * If no "language" value has been set, this method will
     * set and return a default "language" value,
     * if any such value is available
     *
     * @see getDefaultLanguage()
     *
     * @return string|null language or null if no language has been set
     */
    public function getLanguage() : ?string 
    {
        if ( ! $this->hasLanguage()) {
            $this->setLanguage($this->getDefaultLanguage());
        }
        return $this->language;
    }

    /**
     * Check if "language" has been set
     *
     * @return bool True if "language" has been set, false if not
     */
    public function hasLanguage() : bool
    {
        return isset($this->language);
    }

    /**
     * Get a default "language" value, if any is available
     *
     * @return string|null Default "language" value or null if no default value is available
     */
    public function getDefaultLanguage() : ?string
    {
        return null;
    }
}