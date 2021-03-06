<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Service\Store;

use Slince\Shopify\Model\Store\Currency;
use Slince\Shopify\Model\Store\ShippingZone;
use Slince\Shopify\Service\Common\GeneralCurdManager;

class CurrencyManager extends GeneralCurdManager implements ShippingZoneManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getServiceName()
    {
        return 'currencies';
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function getModelClass()
    {
        return Currency::class;
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        throw new \Exception('The action is not supported');
    }

    /**
     * {@inheritdoc}
     */
    public function count(array $query = [])
    {
        throw new \Exception('The action is not supported');
    }
}
