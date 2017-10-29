<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Author Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\AuthorAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait AuthorTrait
{
    /**
     * Name of author
     *
     * @var string|null
     */
    protected $author = null;

    /**
     * Set author
     *
     * @param string|null $name Name of author
     *
     * @return self
     */
    public function setAuthor(?string $name)
    {
        $this->author = $name;

        return $this;
    }

    /**
     * Get author
     *
     * If no "author" value has been set, this method will
     * set and return a default "author" value,
     * if any such value is available
     *
     * @see getDefaultAuthor()
     *
     * @return string|null author or null if no author has been set
     */
    public function getAuthor() : ?string 
    {
        if ( ! $this->hasAuthor()) {
            $this->setAuthor($this->getDefaultAuthor());
        }
        return $this->author;
    }

    /**
     * Check if "author" has been set
     *
     * @return bool True if "author" has been set, false if not
     */
    public function hasAuthor() : bool
    {
        return isset($this->author);
    }

    /**
     * Get a default "author" value, if any is available
     *
     * @return string|null Default "author" value or null if no default value is available
     */
    public function getDefaultAuthor() : ?string
    {
        return null;
    }
}