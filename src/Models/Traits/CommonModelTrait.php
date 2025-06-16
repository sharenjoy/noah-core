<?php

namespace Sharenjoy\NoahCms\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use RalphJSmit\Laravel\SEO\Support\AlternateTag;
use Spatie\Activitylog\LogOptions;

trait CommonModelTrait
{
    public function getFormFields(): array
    {
        if (method_exists($this, 'formFields')) {
            return $this->formFields();
        }

        return $this->formFields;
    }

    public function getTableFields(): array
    {
        if (method_exists($this, 'tableFields')) {
            return $this->tableFields();
        }

        return $this->tableFields;
    }

    protected function getAlternateTag(string $path)
    {
        $items = [];
        $locales = array_keys(config('noah-cms.locale'));

        foreach ($locales as $locale) {
            $items[] = new AlternateTag(
                hreflang: $locale,
                href: LaravelLocalization::getLocalizedURL($locale, $path),
            );
        }

        return $items;
    }

    /**
     * @return \Spatie\Activitylog\LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    public function getSortColumn(): array
    {
        return $this->sort ?? [];
    }

    public function scopeSort($query): Builder
    {
        foreach ($this->sort ?? [] as $column => $direction) {
            $query->orderBy($column, $direction);
        }

        return $query;
    }
}
