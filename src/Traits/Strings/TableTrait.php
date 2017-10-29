<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Name of table
     *
     * @var string|null
     */
    protected $table = null;

    /**
     * Set table
     *
     * @param string|null $name Name of table
     *
     * @return self
     */
    public function setTable(?string $name)
    {
        $this->table = $name;

        return $this;
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
     * @return string|null table or null if no table has been set
     */
    public function getTable() : ?string 
    {
        if ( ! $this->hasTable()) {
            $this->setTable($this->getDefaultTable());
        }
        return $this->table;
    }

    /**
     * Check if "table" has been set
     *
     * @return bool True if "table" has been set, false if not
     */
    public function hasTable() : bool
    {
        return isset($this->table);
    }

    /**
     * Get a default "table" value, if any is available
     *
     * @return string|null Default "table" value or null if no default value is available
     */
    public function getDefaultTable() : ?string
    {
        return null;
    }
}