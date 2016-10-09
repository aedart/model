<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Sql Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\SqlAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait SqlTrait
{
    /**
     * A Structured Query Language (SQL) query
     *
     * @var string|null
     */
    protected $sql = null;

    /**
     * Set sql
     *
     * @param string $query A Structured Query Language (SQL) query
     *
     * @return void
     */
    public function setSql($query)
    {
        $this->sql = (string) $query;
    }

    /**
     * Get sql
     *
     * If no "sql" value has been set, this method will
     * set and return a default "sql" value,
     * if any such value is available
     *
     * @see getDefaultSql()
     *
     * @return string|null "sql" value or null if no "sql" value has been set
     */
    public function getSql()
    {
        if (!$this->hasSql() && $this->hasDefaultSql()) {
            $this->setSql($this->getDefaultSql());
        }
        return $this->sql;
    }

    /**
     * Get a default "sql" value, if any is available
     *
     * @return string|null A default "sql" value or null if no default value is available
     */
    public function getDefaultSql()
    {
        return null;
    }

    /**
     * Check if "sql" has been set
     *
     * @return bool True if "sql" value has been set, false if not
     */
    public function hasSql()
    {
        return isset($this->sql);
    }

    /**
     * Check if a default "sql" is available or not
     *
     * @return bool True of a default "sql" value is available, false if not
     */
    public function hasDefaultSql()
    {
        $default = $this->getDefaultSql();
        return isset($default);
    }
}