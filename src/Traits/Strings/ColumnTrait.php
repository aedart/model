<?php namespace Aedart\Model\Traits\Strings;

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
     * Name of a column
     *
     * @var string|null
     */
    protected $column = null;

    /**
     * Set column
     *
     * @param string $name Name of a column
     *
     * @return void
     */
    public function setColumn($name)
    {
        $this->column = (string) $name;
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
     * @return string|null "column" value or null if no "column" value has been set
     */
    public function getColumn()
    {
        if (!$this->hasColumn() && $this->hasDefaultColumn()) {
            $this->setColumn($this->getDefaultColumn());
        }
        return $this->column;
    }

    /**
     * Get a default "column" value, if any is available
     *
     * @return string|null A default "column" value or null if no default value is available
     */
    public function getDefaultColumn()
    {
        return null;
    }

    /**
     * Check if "column" has been set
     *
     * @return bool True if "column" value has been set, false if not
     */
    public function hasColumn()
    {
        return isset($this->column);
    }

    /**
     * Check if a default "column" is available or not
     *
     * @return bool True of a default "column" value is available, false if not
     */
    public function hasDefaultColumn()
    {
        $default = $this->getDefaultColumn();
        return isset($default);
    }
}