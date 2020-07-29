<?php

namespace App\JsonApi\Mobs;

use CloudCreativity\LaravelJsonApi\Eloquent\AbstractAdapter;
use CloudCreativity\LaravelJsonApi\Pagination\StandardStrategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Adapter extends AbstractAdapter
{

    protected $defaultPagination = ['number' => 1];

    /**
     * Mapping of JSON API attribute field names to model keys.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Mapping of JSON API filter names to model scopes.
     * Las opciones a filtrar son:
     * - Monster ID
     * - Monster Name
     * - MVP with possibles values 'TRUE', 'FALSE' or 'ALL'
     * - Size
     * - Race with possibles values
     * - Element with possibles values
     * - Card ID
     * - Custom with possibles values 'TRUE', 'FALSE' or 'ALL'
     * @var array
     */
    protected $filterScopes = [
        'id' => null,
        'name' => null,
        'mvp' => null,
        'size' => 'Scale',
        'race' => null,
        'element' => null,
        'cardID' => null,
        'custom' => null
    ];

    /**
     * Adapter constructor.
     *
     * @param StandardStrategy $paging
     */
    public function __construct(StandardStrategy $paging)
    {
        $paging->withPageKey('page')->withPerPageKey('limit');
        parent::__construct(new \App\Mob(), $paging);
    }

    /**
     * @param Builder $query
     * @param Collection $filters
     * @return void
     */
    protected function filter($query, Collection $filters)
    {
        $this->filterWithScopes($query, $filters);

        // Filtro MVP
        if ($mvp = $filters->get('mvp'))
        {
            if (strtoupper($mvp) == 'TRUE')
            {
                $query->where('mob_db.MEXP', '>', "0");
            }
            elseif (strtoupper($mvp) == 'FALSE')
            {
                $query->where('mob_db.MEXP', '=', "0");
            }
            else
            {
                $query->where('mob_db.MEXP', '>=', "0");
            }
        }

        // Filtro CARDID
        if ($card = $filters->get('cardID'))
        {
            if (isset($card))
            {
                $query->where('mob_db.DropCardid', '=', $card);
            }
        }

        // Filtro CUSTOM
        /*if ($custom = $filters->get('custom'))
        {
            if (strtoupper($custom) == 'TRUE')
            {
                $query->where('mob_db.', '>', "0");
            }
            elseif (strtoupper($custom) == 'FALSE')
            {
                $query->where('mob_db.', '=', "0");
            }
            else
            {
                $query->where('mob_db.', '>=', "0");
            }
        }*/
    }
}
