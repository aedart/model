<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Isbn13 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\Isbn13Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait Isbn13Trait
{
    /**
     * International Standard Book Number (ISBN), 13-digit
     *
     * @var string|null
     */
    protected $isbn13 = null;

    /**
     * Set isbn13
     *
     * @param string $isbn13 International Standard Book Number (ISBN), 13-digit
     *
     * @return void
     */
    public function setIsbn13($isbn13)
    {
        $this->isbn13 = (string) $isbn13;
    }

    /**
     * Get isbn13
     *
     * If no "isbn13" value has been set, this method will
     * set and return a default "isbn13" value,
     * if any such value is available
     *
     * @see getDefaultIsbn13()
     *
     * @return string|null "isbn13" value or null if no "isbn13" value has been set
     */
    public function getIsbn13()
    {
        if (!$this->hasIsbn13() && $this->hasDefaultIsbn13()) {
            $this->setIsbn13($this->getDefaultIsbn13());
        }
        return $this->isbn13;
    }

    /**
     * Get a default "isbn13" value, if any is available
     *
     * @return string|null A default "isbn13" value or null if no default value is available
     */
    public function getDefaultIsbn13()
    {
        return null;
    }

    /**
     * Check if "isbn13" has been set
     *
     * @return bool True if "isbn13" value has been set, false if not
     */
    public function hasIsbn13()
    {
        return isset($this->isbn13);
    }

    /**
     * Check if a default "isbn13" is available or not
     *
     * @return bool True of a default "isbn13" value is available, false if not
     */
    public function hasDefaultIsbn13()
    {
        $default = $this->getDefaultIsbn13();
        return isset($default);
    }
}