<?php
declare(strict_types=1);

namespace Aedart\Model\Traits\Integers;

/**
 * <h1>Purchase Date Trait</h1>
 *
 * @see \Aedart\Model\Contracts\Integers\PurchaseDateAware
 *
 * @author Alin Eugen Deac <aedart@gmail.com>
 * @package Aedart\Model\Traits\Integers
 */
trait PurchaseDateTrait
{
    /**
     * Date of planned purchase
     *
     * @var int|null
     */
    protected $purchaseDate = null;

    /**
     * Set purchase date
     *
     * @param int|null $date Date of planned purchase
     *
     * @return self
     */
    public function setPurchaseDate(?int $date)
    {
        $this->purchaseDate = $date;

        return $this;
    }

    /**
     * Get purchase date
     *
     * If no "purchase date" value has been set, this method will
     * set and return a default "purchase date" value,
     * if any such value is available
     *
     * @see getDefaultPurchaseDate()
     *
     * @return int|null purchase date or null if no purchase date has been set
     */
    public function getPurchaseDate() : ?int 
    {
        if ( ! $this->hasPurchaseDate()) {
            $this->setPurchaseDate($this->getDefaultPurchaseDate());
        }
        return $this->purchaseDate;
    }

    /**
     * Check if "purchase date" has been set
     *
     * @return bool True if "purchase date" has been set, false if not
     */
    public function hasPurchaseDate() : bool
    {
        return isset($this->purchaseDate);
    }

    /**
     * Get a default "purchase date" value, if any is available
     *
     * @return int|null Default "purchase date" value or null if no default value is available
     */
    public function getDefaultPurchaseDate() : ?int
    {
        return null;
    }
}