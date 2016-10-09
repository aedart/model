<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Table Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TableAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TableTrait
{
    /**
     * Name of a table
     *
     * @var string|null
     */
    protected $table = null;

    /**
     * Set table
     *
     * @param string $name Name of a table
     *
     * @return void
     */
    public function setTable($name)
    {
        $this->table = (string) $name;
    }

    /**
     * Get table
     *
     * If no "table" value has been set, this method will
     * set and return a default "table" value,
     * if any such value is available
     *
     * @see getDefaultTable()
     *
     * @return string|null "table" value or null if no "table" value has been set
     */
    public function getTable()
    {
        if (!$this->hasTable() && $this->hasDefaultTable()) {
            $this->setTable($this->getDefaultTable());
        }
        return $this->table;
    }

    /**
     * Get a default "table" value, if any is available
     *
     * @return string|null A default "table" value or null if no default value is available
     */
    public function getDefaultTable()
    {
        return null;
    }

    /**
     * Check if "table" has been set
     *
     * @return bool True if "table" value has been set, false if not
     */
    public function hasTable()
    {
        return isset($this->table);
    }

    /**
     * Check if a default "table" is available or not
     *
     * @return bool True of a default "table" value is available, false if not
     */
    public function hasDefaultTable()
    {
        $default = $this->getDefaultTable();
        return isset($default);
    }
}