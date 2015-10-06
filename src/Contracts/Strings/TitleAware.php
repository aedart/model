<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Title Aware</h1>
 *
 * Components implementing this interface are aware of some kind of a title.
 * Depending upon your context, a title can be a publication's title, e.g. a
 * page title. It can be a person's title; Mr., Mrs, ...etc.
 *
 * @see https://en.wikipedia.org/wiki/Title
 * @see http://www.merriam-webster.com/dictionary/title
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
interface TitleAware {

    /**
     * Set the given title
     *
     * @param string $title The title of a publication, a peron's title, job title... etc
     *
     * @return void
     */
    public function setTitle($title);

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
    public function getTitle();

    /**
     * Get a default title value, if any is available
     *
     * @return string|null A default title value or Null if no default value is available
     */
    public function getDefaultTitle();

    /**
     * Check if title has been set
     *
     * @return bool True if title has been set, false if not
     */
    public function hasTitle();

    /**
     * Check if a default title is available or not
     *
     * @return bool True of a default title is available, false if not
     */
    public function hasDefaultTitle();
}