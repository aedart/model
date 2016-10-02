<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Locale Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\LocaleAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait LocaleTrait
{
    /**
     * Locale language code, e.g. en_us or other format
     *
     * @var string|null
     */
    protected $locale = null;

    /**
     * Set locale
     *
     * @param string $code Locale language code, e.g. en_us or other format
     *
     * @return void
     */
    public function setLocale($code)
    {
        $this->locale = (string) $code;
    }

    /**
     * Get locale
     *
     * If no "locale" value has been set, this method will
     * set and return a default "locale" value,
     * if any such value is available
     *
     * @see getDefaultLocale()
     *
     * @return string|null "locale" value or null if no "locale" value has been set
     */
    public function getLocale()
    {
        if (!$this->hasLocale() && $this->hasDefaultLocale()) {
            $this->setLocale($this->getDefaultLocale());
        }
        return $this->locale;
    }

    /**
     * Get a default "locale" value, if any is available
     *
     * @return string|null A default "locale" value or null if no default value is available
     */
    public function getDefaultLocale()
    {
        return null;
    }

    /**
     * Check if "locale" has been set
     *
     * @return bool True if "locale" value has been set, false if not
     */
    public function hasLocale()
    {
        return isset($this->locale);
    }

    /**
     * Check if a default "locale" is available or not
     *
     * @return bool True of a default "locale" value is available, false if not
     */
    public function hasDefaultLocale()
    {
        $default = $this->getDefaultLocale();
        return isset($default);
    }
}