<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Query Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\QueryAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait QueryTrait
{
    /**
     * Query
     *
     * @var string|null
     */
    protected $query = null;

    /**
     * Set query
     *
     * @param string $query Query
     *
     * @return void
     */
    public function setQuery($query)
    {
        $this->query = (string) $query;
    }

    /**
     * Get query
     *
     * If no "query" value has been set, this method will
     * set and return a default "query" value,
     * if any such value is available
     *
     * @see getDefaultQuery()
     *
     * @return string|null "query" value or null if no "query" value has been set
     */
    public function getQuery()
    {
        if (!$this->hasQuery() && $this->hasDefaultQuery()) {
            $this->setQuery($this->getDefaultQuery());
        }
        return $this->query;
    }

    /**
     * Get a default "query" value, if any is available
     *
     * @return string|null A default "query" value or null if no default value is available
     */
    public function getDefaultQuery()
    {
        return null;
    }

    /**
     * Check if "query" has been set
     *
     * @return bool True if "query" value has been set, false if not
     */
    public function hasQuery()
    {
        return isset($this->query);
    }

    /**
     * Check if a default "query" is available or not
     *
     * @return bool True of a default "query" value is available, false if not
     */
    public function hasDefaultQuery()
    {
        $default = $this->getDefaultQuery();
        return isset($default);
    }
}