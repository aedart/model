<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Edition Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\EditionAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait EditionTrait
{
    /**
     * The version of a published text, e.g. book, article, newspaper, report... etc
     *
     * @var string|null
     */
    protected $edition = null;

    /**
     * Set edition
     *
     * @param string|null $edition The version of a published text, e.g. book, article, newspaper, report... etc
     *
     * @return self
     */
    public function setEdition(?string $edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * If no "edition" value has been set, this method will
     * set and return a default "edition" value,
     * if any such value is available
     *
     * @see getDefaultEdition()
     *
     * @return string|null edition or null if no edition has been set
     */
    public function getEdition() : ?string 
    {
        if ( ! $this->hasEdition()) {
            $this->setEdition($this->getDefaultEdition());
        }
        return $this->edition;
    }

    /**
     * Check if "edition" has been set
     *
     * @return bool True if "edition" has been set, false if not
     */
    public function hasEdition() : bool
    {
        return isset($this->edition);
    }

    /**
     * Get a default "edition" value, if any is available
     *
     * @return string|null Default "edition" value or null if no default value is available
     */
    public function getDefaultEdition() : ?string
    {
        return null;
    }
}