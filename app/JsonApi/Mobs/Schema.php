<?php

namespace App\JsonApi\Mobs;

use Neomerx\JsonApi\Schema\SchemaProvider;
use App\Skill;
use App\Mob;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'mobs';

    /**
     * @param \App\Mob $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource)
    {
        return (string) $resource->ID;
    }

    /**
     * @param \App\Mob $resource the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource)
    {
        return [
            'ID' => $resource->ID,
            'Sprite' => $resource->Sprite,
            'kName' => $resource->kName,
            'iName' => $resource->iName,
            'LV' => $resource->LV,
            'HP' => $resource->HP,
            'SP' => $resource->SP,
            'EXP' => $resource->EXP,
            'JEXP' => $resource->JEXP,
            'Range1' => $resource->Range1,
            'ATK1' => $resource->ATK1,
            'ATK2' => $resource->ATK2,
            'DEF' => $resource->DEF,
            'MDEF' => $resource->MDEF,
            'STR' => $resource->STR,
            'AGI' => $resource->AGI,
            'VIT' => $resource->VIT,
            'INT' => $resource->INT,
            'DEX' => $resource->DEX,
            'LUK' => $resource->LUK,
            'Range2' => $resource->Range2,
            'Range3' => $resource->Range3,
            'Scale' => $resource->Scale,
            'Race' => $resource->Race,
            'Element' => $resource->Element,
            'Mode' => $resource->Mode,
            'Speed' => $resource->Speed,
            'aDelay' => $resource->aDelay,
            'aMotion' => $resource->aMotion,
            'dMotion' => $resource->dMotion,
            'MEXP' => $resource->MEXP,
            'MVP1id' => $resource->MVP1id,
            'MVP1per' => $resource->MVP1per,
            'MVP2id' => $resource->MVP2id,
            'MVP2per' => $resource->MVP2per,
            'MVP3id' => $resource->MVP3id,
            'MVP3per' => $resource->MVP3per,
            'Drop1id' => $resource->Drop1id,
            'Drop1per' => $resource->Drop1per,
            'Drop2id' => $resource->Drop2id,
            'Drop2per' => $resource->Drop2per,
            'Drop3id' => $resource->Drop3id,
            'Drop3per' => $resource->Drop3per,
            'Drop4id' => $resource->Drop4id,
            'Drop4per' => $resource->Drop4per,
            'Drop5id' => $resource->Drop5id,
            'Drop5per' => $resource->Drop5per,
            'Drop6id' => $resource->Drop6id,
            'Drop6per' => $resource->Drop6per,
            'Drop7id' => $resource->Drop7id,
            'Drop7per' => $resource->Drop7per,
            'Drop8id' => $resource->Drop8id,
            'Drop8per' => $resource->Drop8per,
            'Drop9id' => $resource->Drop9id,
            'Drop9per' => $resource->Drop9per,
            'DropCardid' => $resource->DropCardid,
            'DropCardper' => $resource->DropCardper,
            'skills' => $resource->skills($resource->ID),
            //'created-at' => $resource->created_at->toAtomString(),
            //'updated-at' => $resource->updated_at->toAtomString(),
        ];
    }
}
