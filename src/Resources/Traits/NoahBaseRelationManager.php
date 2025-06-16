<?php

namespace Sharenjoy\NoahCms\Resources\Traits;

use Sharenjoy\NoahCms\Tables\Columns\ResourceIDColumn;

trait NoahBaseRelationManager
{
    protected static function getTableStartColumns($resourceClass)
    {
        return [
            ResourceIDColumn::make('id')
                ->label('ID')
                ->sortable()
                ->searchable()
                ->toggleable()
                ->wrapHeader()
                ->width('1%')
                ->content([
                    'resource' => $resourceClass,
                ]),
        ];
    }
}
