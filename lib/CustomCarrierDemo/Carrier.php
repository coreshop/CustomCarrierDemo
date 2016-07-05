<?php
/**
 * CustomCarrierDemo
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2016 Dominik Pfaffenbauer (http://www.pfaffenbauer.at)
 * @license    http://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CustomCarrierDemo;

use CoreShop\Model\Carrier as CoreShopCarrier;
use CoreShop\Model\Cart;
use CoreShop\Model\Zone;

/**
 * Class Carrier
 * @package CustomCarrierDemo
 */
class Carrier extends CoreShopCarrier
{
    /**
     * Get max possible delivery price for this carrier
     *
     * @param Zone $zone
     * @return float|bool
     */
    public function getMaxDeliveryPrice(Zone $zone = null)
    {
        return 1000;
    }

    /**
     * Get delivery Price for cart
     *
     * @param Zone $zone
     * @param Cart $cart
     * @return bool|float
     */
    public function getDeliveryPrice(Cart $cart, Zone $zone = null)
    {
        return 100;
    }

    /**
     * Check if carrier is allowed for cart and zone
     *
     * @param Cart|null $cart
     * @param Zone|null $zone
     * @return bool
     * @throws \CoreShop\Exception\UnsupportedException
     */
    public function checkCarrierForCart(Cart $cart = null, Zone $zone = null)
    {
        return true;
    }
}
