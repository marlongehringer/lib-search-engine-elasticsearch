<?php

declare(strict_types=1);

namespace LizardsAndPumpkins\DataPool\SearchEngine\Elasticsearch\Operator;

use LizardsAndPumpkins\DataPool\SearchEngine\Elasticsearch\ElasticsearchSearchEngine;

class ElasticsearchQueryOperatorFullText implements ElasticsearchQueryOperator
{
    public function getFormattedArray(string $fieldName, string $fieldValue) : array
    {
        return [
            'bool' => [
                'should' => [
                    'match' => [
                        ElasticsearchSearchEngine::FULL_TEXT_SEARCH_FIELD_NAME => $fieldValue
                    ]
                ]
            ]
        ];
    }
}
