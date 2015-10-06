<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Title Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TitleAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TitleTrait {

    /**
     * The title of a publication, a peron's title, job title... etc
     *
     * @var string|null
     */
    protected $title = null;

    /**
     * Set the given title
     *
     * @param string $title The title of a publication, a peron's title, job title... etc
     *
     * @return void
     */
    public function setTitle($title) {
        $this->title = (string) $title;
    }

    /**
     * Get the given title
     *
     * If no title has been set, this method will
     * set and return a default title, if any such
     * value is available
     *
     * @see getDefaultTitle()
     *
     * @return string|null title or null if none title has been set
     */
    public function getTitle() {
        if (!$this->hasTitle() && $this->hasDefaultTitle()) {
            $this->setTitle($this->getDefaultTitle());
        }
        return $this->title;
    }

    /**
     * Get a default title value, if any is available
     *
     * @return string|null A default title value or Null if no default value is available
     */
    public function getDefaultTitle() {
        return null;
    }

    /**
     * Check if title has been set
     *
     * @return bool True if title has been set, false if not
     */
    public function hasTitle() {
        if (!is_null($this->title)) {
            return true;
        }
        return false;
    }

    /**
     * Check if a default title is available or not
     *
     * @return bool True of a default title is available, false if not
     */
    public function hasDefaultTitle() {
        if (!is_null($this->getDefaultTitle())) {
            return true;
        }
        return false;
    }
}