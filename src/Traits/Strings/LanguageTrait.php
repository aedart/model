<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $language Name or identifier of a language
     *
     * @return void
     */
    public function setLanguage($language)
    {
        $this->language = (string) $language;
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
     * @return string|null "language" value or null if no "language" value has been set
     */
    public function getLanguage()
    {
        if (!$this->hasLanguage() && $this->hasDefaultLanguage()) {
            $this->setLanguage($this->getDefaultLanguage());
        }
        return $this->language;
    }

    /**
     * Get a default "language" value, if any is available
     *
     * @return string|null A default "language" value or null if no default value is available
     */
    public function getDefaultLanguage()
    {
        return null;
    }

    /**
     * Check if "language" has been set
     *
     * @return bool True if "language" value has been set, false if not
     */
    public function hasLanguage()
    {
        return isset($this->language);
    }

    /**
     * Check if a default "language" is available or not
     *
     * @return bool True of a default "language" value is available, false if not
     */
    public function hasDefaultLanguage()
    {
        $default = $this->getDefaultLanguage();
        return isset($default);
    }
}