<?php namespace Aedart\Model\Traits\Arrays;

/**
 * <h1>Data Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Arrays\DataAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Arrays
 */
trait DataTrait {

    /**
     * Data - A list (array) containing a set of values
     *
     * @var array|null
     */
    protected $data = null;

    /**
     * Set the given data
     *
     * @param array $values Data - A list (array) containing a set of values
     *
     * @return void
     */
    public function setData(array $values) {
        $this->data = $values;
    }

    /**
     * Get the given data
     *
     * If no data has been set, this method will
     * set and return a default data, if any such
     * value is available
     *
     * @see getDefaultData()
     *
     * @return array|null data or null if none data has been set
     */
    public function getData() {
        if (!$this->hasData() && $this->hasDefaultData()) {
            $this->setData($this->getDefaultData());
        }
        return $this->data;
    }

    /**
     * Get a default data value, if any is available
     *
     * @return array|null A default data value or Null if no default value is available
     */
    public function getDefaultData() {
        return null;
    }

    /**
     * Check if data has been set
     *
     * @return bool True if data has been set, false if not
     */
    public function hasData() {
        return !is_null($this->data);
    }

    /**
     * Check if a default data is available or not
     *
     * @return bool True of a default data is available, false if not
     */
    public function hasDefaultData() {
        return !is_null($this->getDefaultData());
    }
}