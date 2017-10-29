<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * @param string|null $query Query
     *
     * @return self
     */
    public function setQuery(?string $query)
    {
        $this->query = $query;

        return $this;
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
     * @return string|null query or null if no query has been set
     */
    public function getQuery() : ?string 
    {
        if ( ! $this->hasQuery()) {
            $this->setQuery($this->getDefaultQuery());
        }
        return $this->query;
    }

    /**
     * Check if "query" has been set
     *
     * @return bool True if "query" has been set, false if not
     */
    public function hasQuery() : bool
    {
        return isset($this->query);
    }

    /**
     * Get a default "query" value, if any is available
     *
     * @return string|null Default "query" value or null if no default value is available
     */
    public function getDefaultQuery() : ?string
    {
        return null;
    }
}