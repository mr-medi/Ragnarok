<?php

namespace App\JsonApi\Mobs;

use CloudCreativity\LaravelJsonApi\Validation\AbstractValidators;

class Validators extends AbstractValidators
{

    /**
     * The include paths a client is allowed to request.
     *
     * @var string[]|null
     *      the allowed paths, an empty array for none allowed, or null to allow all paths.
     */
    protected $allowedIncludePaths = null;

    /**
     * The sort field names a client is allowed send.
     *
     * @var string[]|null
     *      the allowed fields, an empty array for none allowed, or null to allow all fields.
     */
    protected $allowedSortParameters = null;

    /**
     * The filters a client is allowed send.
     *
     * @var string[]|null
     *      the allowed filters, an empty array for none allowed, or null to allow all.
     */
    protected $allowedFilteringParameters = null;
    /**
     * Get resource validation rules.
     *
     * @param mixed|null $record
     *      the record being updated, or null if creating a resource.
     * @return mixed
     */
    protected function rules($record = null): array
    {
        return [
            'size' => 'sometimes|numeric',
            /*'race' => 'sometimes|string',
            'element' => 'sometimes|string',
            'cardID' => 'sometimes|numeric',
            'custom' => 'sometimes|in:YES,no,all',
            'id' => 'sometimes|numeric',
            'name' => 'sometimes|string',*/
            'mvp' => 'filled|in:YES,NO,ALL',

        ];
    }

    /**
     * Get query parameter validation rules.
     *
     * @return array
     */
    protected function queryRules(): array
    {
        return [
            'size' => 'sometimes|numeric',
            'mvp' => 'filled|in:TRUE,FALSE,ALL',
        ];
    }

}
