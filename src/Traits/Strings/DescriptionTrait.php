<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Description Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\DescriptionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait DescriptionTrait {

    /**
     * Description
     *
     * @var string|null
     */
    protected $description = null;

    /**
     * Set the given description
     *
     * @param string $description Description
     *
     * @return void
     */
    public function setDescription($description) {
        $this->description = (string) $description;
    }

    /**
     * Get the given description
     *
     * If no description has been set, this method will
     * set and return a default description, if any such
     * value is available
     *
     * @see getDefaultDescription()
     *
     * @return string|null description or null if none description has been set
     */
    public function getDescription() {
        if (!$this->hasDescription() && $this->hasDefaultDescription()) {
            $this->setDescription($this->getDefaultDescription());
        }
        return $this->description;
    }

    /**
     * Get a default description value, if any is available
     *
     * @return string|null A default description value or Null if no default value is available
     */
    public function getDefaultDescription() {
        return null;
    }

    /**
     * Check if description has been set
     *
     * @return bool True if description has been set, false if not
     */
    public function hasDescription() {
        if (!is_null($this->description)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default description is available or not
     *
     * @return bool True of a default description is available, false if not
     */
    public function hasDefaultDescription() {
        if (!is_null($this->getDefaultDescription())) {
            return true;
        }
        return false;
    }
}