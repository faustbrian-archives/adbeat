<?php

declare(strict_types=1);

/*
 * This file is part of Adbeat PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\AdBeat\API;

use BrianFaust\Http\HttpResponse;

class Ad extends AbstractAPI
{
    /**
     * @param null|string $adHash
     * @param array       $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function metrics(?string $adHash = null, array $parameters = []): HttpResponse
    {
        return $this->client->get("adMetrics/{$adHash}", $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function terms(array $parameters = []): HttpResponse
    {
        return $this->client->get('adTerms', $parameters);
    }
}
