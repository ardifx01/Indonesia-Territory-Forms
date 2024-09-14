<?php

namespace Teguh02\IndonesiaTerritoryForms\Traits;

use Filament\Forms\Components\Select;
use Teguh02\IndonesiaTerritoryForms\Models\Province;

trait HasProvinceForm 
{
    static function province_form() {
        return Select::make('province_id')
            ->searchable()
            ->label(__('indonesia-territory-forms::indonesia-territory-forms.province'))
            ->name(config('indonesia-territory-forms.forms_name.province'))
            ->options(fn() => collect(app(Province::class)->all())
                ->mapWithKeys(fn($province) => [$province['prov_id'] => $province['prov_name']]));
    }
}