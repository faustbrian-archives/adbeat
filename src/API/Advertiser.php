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

class Advertiser extends AbstractAPI
{
    /**
     * @param string $advertiserId
     * @param array  $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function events(string $advertiserId, array $parameters = []): HttpResponse
    {
        return $this->client->get("advertiserEvents/{$advertiserId}", $parameters);
    }

    /**
     * @param string $advertiserId
     * @param array  $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function info(string $advertiserId, array $parameters = []): HttpResponse
    {
        return $this->client->get("advertiserInfo/{$advertiserId}", $parameters);
    }

    /**
     * @param string $advertiserId
     * @param array  $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function metrics(string $advertiserId, array $parameters = []): HttpResponse
    {
        return $this->client->get("advertiserMetrics/{$advertiserId}", $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function lists(array $parameters = []): HttpResponse
    {
        return $this->client->get('advertisers', $parameters);
    }
}
