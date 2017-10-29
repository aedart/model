<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Row Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\RowAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait RowTrait
{
    /**
     * A row identifier
     *
     * @var int|null
     */
    protected $row = null;

    /**
     * Set row
     *
     * @param int|null $identifier A row identifier
     *
     * @return self
     */
    public function setRow(?int $identifier)
    {
        $this->row = $identifier;

        return $this;
    }

    /**
     * Get row
     *
     * If no "row" value has been set, this method will
     * set and return a default "row" value,
     * if any such value is available
     *
     * @see getDefaultRow()
     *
     * @return int|null row or null if no row has been set
     */
    public function getRow() : ?int 
    {
        if ( ! $this->hasRow()) {
            $this->setRow($this->getDefaultRow());
        }
        return $this->row;
    }

    /**
     * Check if "row" has been set
     *
     * @return bool True if "row" has been set, false if not
     */
    public function hasRow() : bool
    {
        return isset($this->row);
    }

    /**
     * Get a default "row" value, if any is available
     *
     * @return int|null Default "row" value or null if no default value is available
     */
    public function getDefaultRow() : ?int
    {
        return null;
    }
}