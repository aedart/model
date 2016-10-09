<?php namespace Aedart\Model\Traits\Integers;

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
     * @param int $identifier A row identifier
     *
     * @return void
     */
    public function setRow($identifier)
    {
        $this->row = (int) $identifier;
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
     * @return int|null "row" value or null if no "row" value has been set
     */
    public function getRow()
    {
        if (!$this->hasRow() && $this->hasDefaultRow()) {
            $this->setRow($this->getDefaultRow());
        }
        return $this->row;
    }

    /**
     * Get a default "row" value, if any is available
     *
     * @return int|null A default "row" value or null if no default value is available
     */
    public function getDefaultRow()
    {
        return null;
    }

    /**
     * Check if "row" has been set
     *
     * @return bool True if "row" value has been set, false if not
     */
    public function hasRow()
    {
        return isset($this->row);
    }

    /**
     * Check if a default "row" is available or not
     *
     * @return bool True of a default "row" value is available, false if not
     */
    public function hasDefaultRow()
    {
        $default = $this->getDefaultRow();
        return isset($default);
    }
}