<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

declare(strict_types = 1);

namespace Elasticsearch\Namespaces;

use Elasticsearch\Namespaces\AbstractNamespace;

/**
 * Class AutoscalingNamespace
 * Generated running $ php util/GenerateEndpoints.php 7.9
 */
class AutoscalingNamespace extends AbstractNamespace
{

    /**
     * $params['name'] = (string) the name of the autoscaling policy
     *
     * @param  array $params Associative array of parameters
     * @return array
     * @see    https://www.elastic.co/guide/en/elasticsearch/reference/current/autoscaling-delete-autoscaling-policy.html
     *
     * @note This API is EXPERIMENTAL and may be changed or removed completely in a future release
     */
    public function deleteAutoscalingPolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Autoscaling\DeleteAutoscalingPolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    public function getAutoscalingDecision(array $params = [])
    {

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Autoscaling\GetAutoscalingDecision');
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (string) the name of the autoscaling policy
     *
     * @param  array $params Associative array of parameters
     * @return array
     * @see    https://www.elastic.co/guide/en/elasticsearch/reference/current/autoscaling-get-autoscaling-policy.html
     *
     * @note This API is EXPERIMENTAL and may be changed or removed completely in a future release
     */
    public function getAutoscalingPolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Autoscaling\GetAutoscalingPolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);

        return $this->performRequest($endpoint);
    }
    /**
     * $params['name'] = (string) the name of the autoscaling policy
     * $params['body'] = (array) the specification of the autoscaling policy (Required)
     *
     * @param  array $params Associative array of parameters
     * @return array
     * @see    https://www.elastic.co/guide/en/elasticsearch/reference/current/autoscaling-put-autoscaling-policy.html
     *
     * @note This API is EXPERIMENTAL and may be changed or removed completely in a future release
     */
    public function putAutoscalingPolicy(array $params = [])
    {
        $name = $this->extractArgument($params, 'name');
        $body = $this->extractArgument($params, 'body');

        $endpointBuilder = $this->endpoints;
        $endpoint = $endpointBuilder('Autoscaling\PutAutoscalingPolicy');
        $endpoint->setParams($params);
        $endpoint->setName($name);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }
}
