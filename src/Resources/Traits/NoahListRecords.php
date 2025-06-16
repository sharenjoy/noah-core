<?php

namespace Sharenjoy\NoahCms\Resources\Traits;

use Filament\Actions\CreateAction;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;
use Filament\Support\Enums\MaxWidth;
use Spatie\Translatable\HasTranslations;

trait NoahListRecords
{
    use Translatable;

    protected array $recordActions = [];

    public function mountNoahListRecords()
    {
        //
    }

    public function updatedNoahListRecords()
    {
        //
    }

    protected function recordHeaderActions(): array
    {
        $actions = [];

        if (in_array(HasTranslations::class, class_uses(static::getModel()))) {
            $actions[] = LocaleSwitcher::make();
        }

        $actions[] = CreateAction::make();

        return $actions;
    }

    public function getMaxContentWidth(): MaxWidth
    {
        return MaxWidth::Full;
    }
}
