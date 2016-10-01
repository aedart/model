<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Title Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\TitleAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait TitleTrait
{
    /**
     * Title of a publication, a person, a job... etc
     *
     * @var string|null
     */
    protected $title = null;

    /**
     * Set title
     *
     * @param string $title Title of a publication, a person, a job... etc
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = (string) $title;
    }

    /**
     * Get title
     *
     * If no "title" value has been set, this method will
     * set and return a default "title" value,
     * if any such value is available
     *
     * @see getDefaultTitle()
     *
     * @return string|null "title" value or null if no "title" value has been set
     */
    public function getTitle()
    {
        if (!$this->hasTitle() && $this->hasDefaultTitle()) {
            $this->setTitle($this->getDefaultTitle());
        }
        return $this->title;
    }

    /**
     * Get a default "title" value, if any is available
     *
     * @return string|null A default "title" value or null if no default value is available
     */
    public function getDefaultTitle()
    {
        return null;
    }

    /**
     * Check if "title" has been set
     *
     * @return bool True if "title" value has been set, false if not
     */
    public function hasTitle()
    {
        return isset($this->title);
    }

    /**
     * Check if a default "title" is available or not
     *
     * @return bool True of a default "title" value is available, false if not
     */
    public function hasDefaultTitle()
    {
        $default = $this->getDefaultTitle();
        return isset($default);
    }
}