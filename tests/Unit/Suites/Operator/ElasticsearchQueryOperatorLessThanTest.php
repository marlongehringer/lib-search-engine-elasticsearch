<?php

declare(strict_types=1);

namespace LizardsAndPumpkins\DataPool\SearchEngine\Elasticsearch\Operator;

/**
 * @covers \LizardsAndPumpkins\DataPool\SearchEngine\Elasticsearch\Operator\ElasticsearchQueryOperatorLessThan
 */
class ElasticsearchQueryOperatorLessThanTest extends AbstractElasticsearchQueryOperatorTest
{
    final protected function getOperatorInstance() : ElasticsearchQueryOperator
    {
        return new ElasticsearchQueryOperatorLessThan;
    }

    final protected function getExpectedExpression(string $fieldName, string $fieldValue) : array
    {
        return [
            'bool' => [
                'filter' => [
                    'range' => [
                        $fieldName => [
                            'lt' => $fieldValue
                        ]
                    ]
                ]
            ]
        ];
    }
}
