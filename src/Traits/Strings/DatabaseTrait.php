<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Database Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DatabaseAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DatabaseTrait
{
    /**
     * Name of database
     *
     * @var string|null
     */
    protected $database = null;

    /**
     * Set database
     *
     * @param string|null $name Name of database
     *
     * @return self
     */
    public function setDatabase(?string $name)
    {
        $this->database = $name;

        return $this;
    }

    /**
     * Get database
     *
     * If no "database" value has been set, this method will
     * set and return a default "database" value,
     * if any such value is available
     *
     * @see getDefaultDatabase()
     *
     * @return string|null database or null if no database has been set
     */
    public function getDatabase() : ?string 
    {
        if ( ! $this->hasDatabase()) {
            $this->setDatabase($this->getDefaultDatabase());
        }
        return $this->database;
    }

    /**
     * Check if "database" has been set
     *
     * @return bool True if "database" has been set, false if not
     */
    public function hasDatabase() : bool
    {
        return isset($this->database);
    }

    /**
     * Get a default "database" value, if any is available
     *
     * @return string|null Default "database" value or null if no default value is available
     */
    public function getDefaultDatabase() : ?string
    {
        return null;
    }
}