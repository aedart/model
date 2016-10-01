<?php namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Nickname Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\NicknameAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait NicknameTrait
{
    /**
     * Nickname of someone or something
     *
     * @var string|null
     */
    protected $nickname = null;

    /**
     * Set nickname
     *
     * @param string $name Nickname of someone or something
     *
     * @return void
     */
    public function setNickname($name)
    {
        $this->nickname = (string) $name;
    }

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
    public function getNickname()
    {
        if (!$this->hasNickname() && $this->hasDefaultNickname()) {
            $this->setNickname($this->getDefaultNickname());
        }
        return $this->nickname;
    }

    /**
     * Get a default "nickname" value, if any is available
     *
     * @return string|null A default "nickname" value or null if no default value is available
     */
    public function getDefaultNickname()
    {
        return null;
    }

    /**
     * Check if "nickname" has been set
     *
     * @return bool True if "nickname" value has been set, false if not
     */
    public function hasNickname()
    {
        return isset($this->nickname);
    }

    /**
     * Check if a default "nickname" is available or not
     *
     * @return bool True of a default "nickname" value is available, false if not
     */
    public function hasDefaultNickname()
    {
        $default = $this->getDefaultNickname();
        return isset($default);
    }
}