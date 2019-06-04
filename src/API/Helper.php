<?php

declare(strict_types=1);

/*
 * This file is part of Adbeat PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\AdBeat\API;

use Plients\Http\HttpResponse;

class Helper extends AbstractAPI
{
    /**
     * @param null|string $adSizeId
     * @param array       $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function adSizes(?string $adSizeId = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("adSizes/{$adSizeId}", $parameters);
    }

    /**
     * @param null|string $eventTypeId
     * @param array       $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function eventTypes(?string $eventTypeId = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("eventTypes/{$eventTypeId}", $parameters);
    }

    /**
     * @param null|string $adTypeId
     * @param array       $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function adTypes(?string $adTypeId = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("adTypes/{$adTypeId}", $parameters);
    }

    /**
     * @param null|string $countryId
     * @param array       $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function countries(?string $countryId = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("countries/{$countryId}", $parameters);
    }

    /**
     * @param null|string $networkId
     * @param array       $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function networks(?string $networkId = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("networks/{$networkId}", $parameters);
    }

    /**
     * @param null|string $platformId
     * @param array       $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function platforms(?string $platformId = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("platforms/{$platformId}", $parameters);
    }
}
