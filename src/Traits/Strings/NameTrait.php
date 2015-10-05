<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\NameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait NameTrait {

    /**
     * Name
     *
     * @var string|null
     */
    protected $name = null;

    /**
     * Set the given name
     *
     * @param string $name Name
     *
     * @return void
     */
    public function setName($name) {
        $this->name = (string) $name;
    }

    /**
     * Get the given name
     *
     * If no name has been set, this method will
     * set and return a default name, if any such
     * value is available
     *
     * @see getDefaultName()
     *
     * @return string|null name or null if none name has been set
     */
    public function getName() {
        if (!$this->hasName() && $this->hasDefaultName()) {
            $this->setName($this->getDefaultName());
        }
        return $this->name;
    }

    /**
     * Get a default name value, if any is available
     *
     * @return string|null A default name value or Null if no default value is available
     */
    public function getDefaultName() {
        return null;
    }

    /**
     * Check if name has been set
     *
     * @return bool True if name has been set, false if not
     */
    public function hasName() {
        if (!is_null($this->name)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default name is available or not
     *
     * @return bool True of a default name is available, false if not
     */
    public function hasDefaultName() {
        if (!is_null($this->getDefaultName())) {
            return true;
        }
        return false;
    }
}