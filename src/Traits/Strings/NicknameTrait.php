<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Nick Name Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\NickNameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait NickNameTrait
{
    /**
     * Nickname of someone or something
     *
     * @var string|null
     */
    protected $nickName = null;

    /**
     * Set nick name
     *
     * @param string|null $name Nickname of someone or something
     *
     * @return self
     */
    public function setNickName(?string $name)
    {
        $this->nickName = $name;

        return $this;
    }

    /**
     * Get nick name
     *
     * If no "nick name" value has been set, this method will
     * set and return a default "nick name" value,
     * if any such value is available
     *
     * @see getDefaultNickName()
     *
     * @return string|null nick name or null if no nick name has been set
     */
    public function getNickName() : ?string 
    {
        if ( ! $this->hasNickName()) {
            $this->setNickName($this->getDefaultNickName());
        }
        return $this->nickName;
    }

    /**
     * Check if "nick name" has been set
     *
     * @return bool True if "nick name" has been set, false if not
     */
    public function hasNickName() : bool
    {
        return isset($this->nickName);
    }

    /**
     * Get a default "nick name" value, if any is available
     *
     * @return string|null Default "nick name" value or null if no default value is available
     */
    public function getDefaultNickName() : ?string
    {
        return null;
    }
}