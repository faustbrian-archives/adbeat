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

class Ad extends AbstractApi
{
    /**
     * @param null  $adHash
     * @param array $parameters
     *
     * @return mixed
     */
    public function metrics($adHash = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("adMetrics/$adHash");
    }

    /**
     * @param array $parameters
     *
     * @return mixed
     */
    public function terms($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('adTerms');
    }
}
