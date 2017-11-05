<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Strings;

/**
 * <h1>Order Number Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Strings\OrderNumberAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Strings
 */
trait OrderNumberTrait
{
    /**
     * Number that represents a purchase or order placed by a customer
     *
     * @var string|null
     */
    protected $orderNumber = null;

    /**
     * Set order number
     *
     * @param string|null $number Number that represents a purchase or order placed by a customer
     *
     * @return self
     */
    public function setOrderNumber(?string $number)
    {
        $this->orderNumber = $number;

        return $this;
    }

    /**
     * Get order number
     *
     * If no "order number" value has been set, this method will
     * set and return a default "order number" value,
     * if any such value is available
     *
     * @see getDefaultOrderNumber()
     *
     * @return string|null order number or null if no order number has been set
     */
    public function getOrderNumber() : ?string 
    {
        if ( ! $this->hasOrderNumber()) {
            $this->setOrderNumber($this->getDefaultOrderNumber());
        }
        return $this->orderNumber;
    }

    /**
     * Check if "order number" has been set
     *
     * @return bool True if "order number" has been set, false if not
     */
    public function hasOrderNumber() : bool
    {
        return isset($this->orderNumber);
    }

    /**
     * Get a default "order number" value, if any is available
     *
     * @return string|null Default "order number" value or null if no default value is available
     */
    public function getDefaultOrderNumber() : ?string
    {
        return null;
    }
}