<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

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
     * Title
     *
     * @var string|null
     */
    protected $title = null;

    /**
     * Set title
     *
     * @param string|null $title Title
     *
     * @return self
     */
    public function setTitle(?string $title)
    {
        $this->title = $title;

        return $this;
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
     * @return string|null title or null if no title has been set
     */
    public function getTitle() : ?string 
    {
        if ( ! $this->hasTitle()) {
            $this->setTitle($this->getDefaultTitle());
        }
        return $this->title;
    }

    /**
     * Check if "title" has been set
     *
     * @return bool True if "title" has been set, false if not
     */
    public function hasTitle() : bool
    {
        return isset($this->title);
    }

    /**
     * Get a default "title" value, if any is available
     *
     * @return string|null Default "title" value or null if no default value is available
     */
    public function getDefaultTitle() : ?string
    {
        return null;
    }
}