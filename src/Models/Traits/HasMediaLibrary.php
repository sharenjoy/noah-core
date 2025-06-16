<?php

namespace Sharenjoy\NoahCms\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use RalphJSmit\Filament\MediaLibrary\Media\Models\MediaLibraryItem;

trait HasMediaLibrary
{
    public function thumbnail(): BelongsTo
    {
        return $this->belongsTo(MediaLibraryItem::class, 'img');
    }
}
