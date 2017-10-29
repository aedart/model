<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Column Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\ColumnAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait ColumnTrait
{
    /**
     * Name of column
     *
     * @var string|null
     */
    protected $column = null;

    /**
     * Set column
     *
     * @param string|null $name Name of column
     *
     * @return self
     */
    public function setColumn(?string $name)
    {
        $this->column = $name;

        return $this;
    }

    /**
     * Get column
     *
     * If no "column" value has been set, this method will
     * set and return a default "column" value,
     * if any such value is available
     *
     * @see getDefaultColumn()
     *
     * @return string|null column or null if no column has been set
     */
    public function getColumn() : ?string 
    {
        if ( ! $this->hasColumn()) {
            $this->setColumn($this->getDefaultColumn());
        }
        return $this->column;
    }

    /**
     * Check if "column" has been set
     *
     * @return bool True if "column" has been set, false if not
     */
    public function hasColumn() : bool
    {
        return isset($this->column);
    }

    /**
     * Get a default "column" value, if any is available
     *
     * @return string|null Default "column" value or null if no default value is available
     */
    public function getDefaultColumn() : ?string
    {
        return null;
    }
}