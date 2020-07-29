<?php

namespace App\JsonApi\Items;

use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'items';

    /**
     * @param \App\Item $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Item $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            //'id' => $resource->id,
            'name_english' => $resource->name_english,
            'name_japanese' => $resource->name_japanese,
            //'type' => $resource->type,
            'subtype' => $resource->subtype,
            'price_buy' => $resource->price_buy,
            'price_sell' => $resource->price_sell,
            'weight' => $resource->weight,
            'atk' => $resource->atk,
            'matk' => $resource->matk,
            'defence' => $resource->defence,
            'range' => $resource->range,
            'slots' => $resource->slots,
            'equip_jobs' => $resource->equip_jobs,
            'equip_upper' => $resource->equip_upper,
            'equip_genders' => $resource->equip_genders,
            'equip_locations' => $resource->equip_locations,
            'weapon_level' => $resource->weapon_level,
            'equip_level_min' => $resource->equip_level_min,
            'equip_level_max' => $resource->equip_level_max,
            'refineable' => $resource->refineable,
            'disable_options' => $resource->disable_options,
            'view_sprite' => $resource->view_sprite,
            'bindonequip' => $resource->bindonequip,
            'forceserial' => $resource->forceserial,
            'buyingstore' => $resource->buyingstore,
            'delay' => $resource->delay,
            'trade_flag' => $resource->trade_flag,
            'trade_group' => $resource->trade_group,
            'nouse_flag' => $resource->nouse_flag,
            'nouse_group' => $resource->nouse_group,
            'stack_amount' => $resource->stack_amount,
            'stack_flag' => $resource->stack_flag,
            'sprite' => $resource->sprite,
            'script' => $resource->script,
            'equip_script' => $resource->equip_script,
            'unequip_script' => $resource->unequip_script,
            //'created-at' => $resource->created_at->toAtomString(),
            //'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }

    public function getRelationships($resource, $isPrimary, array $includeRelationships)
    {
        return [
            'items' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }
}
