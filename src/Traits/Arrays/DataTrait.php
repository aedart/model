<?php namespace Aedart\Model\Traits\Arrays;

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
     * @param array $values A list (array) containing a set of values
     *
     * @return void
     */
    public function setData(array $values)
    {
        $this->data = $values;
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
     * @return array|null "data" value or null if no "data" value has been set
     */
    public function getData()
    {
        if (!$this->hasData() && $this->hasDefaultData()) {
            $this->setData($this->getDefaultData());
        }
        return $this->data;
    }

    /**
     * Get a default "data" value, if any is available
     *
     * @return array|null A default "data" value or null if no default value is available
     */
    public function getDefaultData()
    {
        return null;
    }

    /**
     * Check if "data" has been set
     *
     * @return bool True if "data" value has been set, false if not
     */
    public function hasData()
    {
        return isset($this->data);
    }

    /**
     * Check if a default "data" is available or not
     *
     * @return bool True of a default "data" value is available, false if not
     */
    public function hasDefaultData()
    {
        $default = $this->getDefaultData();
        return isset($default);
    }
}