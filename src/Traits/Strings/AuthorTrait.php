<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of an author
     *
     * @var string|null
     */
    protected $author = null;

    /**
     * Set author
     *
     * @param string $name Name of an author
     *
     * @return void
     */
    public function setAuthor($name)
    {
        $this->author = (string) $name;
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
     * @return string|null "author" value or null if no "author" value has been set
     */
    public function getAuthor()
    {
        if (!$this->hasAuthor() && $this->hasDefaultAuthor()) {
            $this->setAuthor($this->getDefaultAuthor());
        }
        return $this->author;
    }

    /**
     * Get a default "author" value, if any is available
     *
     * @return string|null A default "author" value or null if no default value is available
     */
    public function getDefaultAuthor()
    {
        return null;
    }

    /**
     * Check if "author" has been set
     *
     * @return bool True if "author" value has been set, false if not
     */
    public function hasAuthor()
    {
        return isset($this->author);
    }

    /**
     * Check if a default "author" is available or not
     *
     * @return bool True of a default "author" value is available, false if not
     */
    public function hasDefaultAuthor()
    {
        $default = $this->getDefaultAuthor();
        return isset($default);
    }
}