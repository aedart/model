<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a database
     *
     * @var string|null
     */
    protected $database = null;

    /**
     * Set database
     *
     * @param string $name Name of a database
     *
     * @return void
     */
    public function setDatabase($name)
    {
        $this->database = (string) $name;
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
     * @return string|null "database" value or null if no "database" value has been set
     */
    public function getDatabase()
    {
        if (!$this->hasDatabase() && $this->hasDefaultDatabase()) {
            $this->setDatabase($this->getDefaultDatabase());
        }
        return $this->database;
    }

    /**
     * Get a default "database" value, if any is available
     *
     * @return string|null A default "database" value or null if no default value is available
     */
    public function getDefaultDatabase()
    {
        return null;
    }

    /**
     * Check if "database" has been set
     *
     * @return bool True if "database" value has been set, false if not
     */
    public function hasDatabase()
    {
        return isset($this->database);
    }

    /**
     * Check if a default "database" is available or not
     *
     * @return bool True of a default "database" value is available, false if not
     */
    public function hasDefaultDatabase()
    {
        $default = $this->getDefaultDatabase();
        return isset($default);
    }
}