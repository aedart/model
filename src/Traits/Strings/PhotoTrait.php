<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Photo Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\PhotoAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait PhotoTrait
{
    /**
     * Path, Uri or other type of location to a photo
     *
     * @var string|null
     */
    protected $photo = null;

    /**
     * Set photo
     *
     * @param string|null $location Path, Uri or other type of location to a photo
     *
     * @return self
     */
    public function setPhoto(?string $location)
    {
        $this->photo = $location;

        return $this;
    }

    /**
     * Get photo
     *
     * If no "photo" value has been set, this method will
     * set and return a default "photo" value,
     * if any such value is available
     *
     * @see getDefaultPhoto()
     *
     * @return string|null photo or null if no photo has been set
     */
    public function getPhoto() : ?string 
    {
        if ( ! $this->hasPhoto()) {
            $this->setPhoto($this->getDefaultPhoto());
        }
        return $this->photo;
    }

    /**
     * Check if "photo" has been set
     *
     * @return bool True if "photo" has been set, false if not
     */
    public function hasPhoto() : bool
    {
        return isset($this->photo);
    }

    /**
     * Get a default "photo" value, if any is available
     *
     * @return string|null Default "photo" value or null if no default value is available
     */
    public function getDefaultPhoto() : ?string
    {
        return null;
    }
}