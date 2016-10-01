<?php namespace Aedart\Model\Traits\Strings;

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
     * @param string $location Path, Uri or other type of location to a photo
     *
     * @return void
     */
    public function setPhoto($location)
    {
        $this->photo = (string) $location;
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
     * @return string|null "photo" value or null if no "photo" value has been set
     */
    public function getPhoto()
    {
        if (!$this->hasPhoto() && $this->hasDefaultPhoto()) {
            $this->setPhoto($this->getDefaultPhoto());
        }
        return $this->photo;
    }

    /**
     * Get a default "photo" value, if any is available
     *
     * @return string|null A default "photo" value or null if no default value is available
     */
    public function getDefaultPhoto()
    {
        return null;
    }

    /**
     * Check if "photo" has been set
     *
     * @return bool True if "photo" value has been set, false if not
     */
    public function hasPhoto()
    {
        return isset($this->photo);
    }

    /**
     * Check if a default "photo" is available or not
     *
     * @return bool True of a default "photo" value is available, false if not
     */
    public function hasDefaultPhoto()
    {
        $default = $this->getDefaultPhoto();
        return isset($default);
    }
}