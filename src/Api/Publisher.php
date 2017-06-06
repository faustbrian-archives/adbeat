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

class Publisher extends AbstractApi
{
    /**
     * @param $publisherId
     * @param array $parameters
     *
     * @return mixed
     */
    public function info($publisherId, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("publisherinfo/$publisherId");
    }

    /**
     * @param array $parameters
     *
     * @return mixed
     */
    public function lists($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('publishers');
    }
}
