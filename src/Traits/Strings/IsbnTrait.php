<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $isbn International Standard Book Number (ISBN)
     *
     * @return self
     */
    public function setIsbn(?string $isbn)
    {
        $this->isbn = $isbn;

        return $this;
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
     * @return string|null isbn or null if no isbn has been set
     */
    public function getIsbn() : ?string 
    {
        if ( ! $this->hasIsbn()) {
            $this->setIsbn($this->getDefaultIsbn());
        }
        return $this->isbn;
    }

    /**
     * Check if "isbn" has been set
     *
     * @return bool True if "isbn" has been set, false if not
     */
    public function hasIsbn() : bool
    {
        return isset($this->isbn);
    }

    /**
     * Get a default "isbn" value, if any is available
     *
     * @return string|null Default "isbn" value or null if no default value is available
     */
    public function getDefaultIsbn() : ?string
    {
        return null;
    }
}