<?php namespace Aedart\Model\Contracts\Strings;

/**
 * <h1>Nickname Aware</h1>
 *
 * Component is aware of a string "nickname" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Contracts\Strings
 */
interface NicknameAware
{
    /**
     * Set nickname
     *
     * @param string $name Nickname of someone or something
     *
     * @return void
     */
    public function setNickname($name);

    /**
     * Get nickname
     *
     * If no "nickname" value has been set, this method will
     * set and return a default "nickname" value,
     * if any such value is available
     *
     * @see getDefaultNickname()
     *
     * @return string|null "nickname" value or null if no "nickname" value has been set
     */
    public function getNickname();

    /**
     * Get a default "nickname" value, if any is available
     *
     * @return string|null A default "nickname" value or null if no default value is available
     */
    public function getDefaultNickname();

    /**
     * Check if "nickname" has been set
     *
     * @return bool True if "nickname" value has been set, false if not
     */
    public function hasNickname();

    /**
     * Check if a default "nickname" is available or not
     *
     * @return bool True of a default "nickname" value is available, false if not
     */
    public function hasDefaultNickname();
}