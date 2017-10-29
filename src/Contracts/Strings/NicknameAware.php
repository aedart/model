<?php

namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Nick Name Aware</h1>
 *
 * Component is aware of a string "nick name" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface NickNameAware
{
    /**
     * Set nick name
     *
     * @param string|null $name Nickname of someone or something
     *
     * @return self
     */
    public function setNickName(?string $name);

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
    public function getNickName() : ?string ;

    /**
     * Check if "nick name" has been set
     *
     * @return bool True if "nick name" has been set, false if not
     */
    public function hasNickName() : bool;

    /**
     * Get a default "nick name" value, if any is available
     *
     * @return string|null Default "nick name" value or null if no default value is available
     */
    public function getDefaultNickName() : ?string;
}