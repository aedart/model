<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Isbn Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IsbnAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IsbnTrait
{
    /**
     * International Standard Book Number (ISBN)
     *
     * @var string|null
     */
    protected $isbn = null;

    /**
     * Set isbn
     *
     * @param string $isbn International Standard Book Number (ISBN)
     *
     * @return void
     */
    public function setIsbn($isbn)
    {
        $this->isbn = (string) $isbn;
    }

    /**
     * Get isbn
     *
     * If no "isbn" value has been set, this method will
     * set and return a default "isbn" value,
     * if any such value is available
     *
     * @see getDefaultIsbn()
     *
     * @return string|null "isbn" value or null if no "isbn" value has been set
     */
    public function getIsbn()
    {
        if (!$this->hasIsbn() && $this->hasDefaultIsbn()) {
            $this->setIsbn($this->getDefaultIsbn());
        }
        return $this->isbn;
    }

    /**
     * Get a default "isbn" value, if any is available
     *
     * @return string|null A default "isbn" value or null if no default value is available
     */
    public function getDefaultIsbn()
    {
        return null;
    }

    /**
     * Check if "isbn" has been set
     *
     * @return bool True if "isbn" value has been set, false if not
     */
    public function hasIsbn()
    {
        return isset($this->isbn);
    }

    /**
     * Check if a default "isbn" is available or not
     *
     * @return bool True of a default "isbn" value is available, false if not
     */
    public function hasDefaultIsbn()
    {
        $default = $this->getDefaultIsbn();
        return isset($default);
    }
}