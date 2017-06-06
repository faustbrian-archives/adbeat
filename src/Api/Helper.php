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

class Helper extends AbstractApi
{
    /**
     * @param null  $adSizeId
     * @param array $parameters
     *
     * @return mixed
     */
    public function adSizes($adSizeId = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("adSizes/$adSizeId");
    }

    /**
     * @param null  $eventTypeId
     * @param array $parameters
     *
     * @return mixed
     */
    public function eventTypes($eventTypeId = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("eventTypes/$eventTypeId");
    }

    /**
     * @param null  $adTypeId
     * @param array $parameters
     *
     * @return mixed
     */
    public function adTypes($adTypeId = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("adTypes/$adTypeId");
    }

    /**
     * @param null  $countryId
     * @param array $parameters
     *
     * @return mixed
     */
    public function countries($countryId = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("countries/$countryId");
    }

    /**
     * @param null  $networkId
     * @param array $parameters
     *
     * @return mixed
     */
    public function networks($networkId = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("networks/$networkId");
    }

    /**
     * @param null  $platformId
     * @param array $parameters
     *
     * @return mixed
     */
    public function platforms($platformId = null, $parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get("platforms/$platformId");
    }
}
