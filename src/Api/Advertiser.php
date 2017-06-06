<?php

/*
 * This file is part of Adbeat PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\AdBeat\Api;

use BrianFaust\Unified\AbstractApi;

class Advertiser extends AbstractApi
{
    /**
     * @param $advertiserId
     * @param array $parameters
     *
     * @return mixed
     */
    public function events($advertiserId, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("advertiserEvents/$advertiserId");
    }

    /**
     * @param $advertiserId
     * @param array $parameters
     *
     * @return mixed
     */
    public function info($advertiserId, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("advertiserInfo/$advertiserId");
    }

    /**
     * @param $advertiserId
     * @param array $parameters
     *
     * @return mixed
     */
    public function metrics($advertiserId, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("advertiserMetrics/$advertiserId");
    }

    /**
     * @param array $parameters
     *
     * @return mixed
     */
    public function lists($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('advertisers');
    }
}
