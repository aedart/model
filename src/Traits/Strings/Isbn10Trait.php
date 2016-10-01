<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Isbn10 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\Isbn10Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait Isbn10Trait
{
    /**
     * International Standard Book Number (ISBN), 10-digit
     *
     * @var string|null
     */
    protected $isbn10 = null;

    /**
     * Set isbn10
     *
     * @param string $isbn10 International Standard Book Number (ISBN), 10-digit
     *
     * @return void
     */
    public function setIsbn10($isbn10)
    {
        $this->isbn10 = (string) $isbn10;
    }

    /**
     * Get isbn10
     *
     * If no "isbn10" value has been set, this method will
     * set and return a default "isbn10" value,
     * if any such value is available
     *
     * @see getDefaultIsbn10()
     *
     * @return string|null "isbn10" value or null if no "isbn10" value has been set
     */
    public function getIsbn10()
    {
        if (!$this->hasIsbn10() && $this->hasDefaultIsbn10()) {
            $this->setIsbn10($this->getDefaultIsbn10());
        }
        return $this->isbn10;
    }

    /**
     * Get a default "isbn10" value, if any is available
     *
     * @return string|null A default "isbn10" value or null if no default value is available
     */
    public function getDefaultIsbn10()
    {
        return null;
    }

    /**
     * Check if "isbn10" has been set
     *
     * @return bool True if "isbn10" value has been set, false if not
     */
    public function hasIsbn10()
    {
        return isset($this->isbn10);
    }

    /**
     * Check if a default "isbn10" is available or not
     *
     * @return bool True of a default "isbn10" value is available, false if not
     */
    public function hasDefaultIsbn10()
    {
        $default = $this->getDefaultIsbn10();
        return isset($default);
    }
}