<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Arrays;

/**
 * <h1>Data Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Arrays\DataAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait DataTrait
{
    /**
     * A list (array) containing a set of values
     *
     * @var array|null
     */
    protected $data = null;

    /**
     * Set data
     *
     * @param array|null $values A list (array) containing a set of values
     *
     * @return self
     */
    public function setData(?array $values)
    {
        $this->data = $values;

        return $this;
    }

    /**
     * Get data
     *
     * If no "data" value has been set, this method will
     * set and return a default "data" value,
     * if any such value is available
     *
     * @see getDefaultData()
     *
     * @return array|null data or null if no data has been set
     */
    public function getData() : ?array 
    {
        if ( ! $this->hasData()) {
            $this->setData($this->getDefaultData());
        }
        return $this->data;
    }

    /**
     * Check if "data" has been set
     *
     * @return bool True if "data" has been set, false if not
     */
    public function hasData() : bool
    {
        return isset($this->data);
    }

    /**
     * Get a default "data" value, if any is available
     *
     * @return array|null Default "data" value or null if no default value is available
     */
    public function getDefaultData() : ?array
    {
        return null;
    }
}