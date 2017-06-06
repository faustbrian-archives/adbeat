<?php

/*
 * This file is part of Adbeat PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\AdBeat;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\AdBeat\Request\Modifiers\ApiKeyModifier;

/**
 * Class HttpClient.
 */
class HttpClient extends AbstractHttpClient
{
    /**
     * {@inheritdoc}
     */
    protected $options = [
        'base_uri' => 'http://api.adbeat.com/v3/',
        'headers' => [
           'User-Agent' => 'BrianFaust/AdBeat',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    protected $requestModifiers = [
        ApiKeyModifier::class,
    ];

    /**
     * @param $baseUri
     * @param $path
     *
     * @return string
     */
    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri.$this->getConfig('apiKey');
    }
}
