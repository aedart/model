<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Isic V4 Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\IsicV4Aware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait IsicV4Trait
{
    /**
     * International Standard of Industrial Classification of All Economic Activities (ISIC), revision 4 code
     *
     * @var string|null
     */
    protected $isicV4 = null;

    /**
     * Set isic v4
     *
     * @param string|null $code International Standard of Industrial Classification of All Economic Activities (ISIC), revision 4 code
     *
     * @return self
     */
    public function setIsicV4(?string $code)
    {
        $this->isicV4 = $code;

        return $this;
    }

    /**
     * Get isic v4
     *
     * If no "isic v4" value has been set, this method will
     * set and return a default "isic v4" value,
     * if any such value is available
     *
     * @see getDefaultIsicV4()
     *
     * @return string|null isic v4 or null if no isic v4 has been set
     */
    public function getIsicV4() : ?string 
    {
        if ( ! $this->hasIsicV4()) {
            $this->setIsicV4($this->getDefaultIsicV4());
        }
        return $this->isicV4;
    }

    /**
     * Check if "isic v4" has been set
     *
     * @return bool True if "isic v4" has been set, false if not
     */
    public function hasIsicV4() : bool
    {
        return isset($this->isicV4);
    }

    /**
     * Get a default "isic v4" value, if any is available
     *
     * @return string|null Default "isic v4" value or null if no default value is available
     */
    public function getDefaultIsicV4() : ?string
    {
        return null;
    }
}