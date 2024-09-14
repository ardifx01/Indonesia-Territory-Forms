<?php

namespace Teguh02\IndonesiaTerritoryForms;

use Teguh02\IndonesiaTerritoryForms\Traits\HasProvinceForm;
use Filament\Forms\Components\Section;
use Teguh02\IndonesiaTerritoryForms\Traits\HasCityForm;
use Teguh02\IndonesiaTerritoryForms\Traits\HasDistrictForm;
use Teguh02\IndonesiaTerritoryForms\Traits\HasSubDistrictForm;

class IndonesiaTerritoryForms {

    use HasProvinceForm, 
        HasCityForm,
        HasDistrictForm,
        HasSubDistrictForm;

    public static function make() {
        return Section::make(__('indonesia-territory-forms::indonesia-territory-forms.section_title'))
            ->schema([
                static::province_form(),
                static::city_form(),
                static::district_form(),
                static::sub_district_form()
            ]);
    }
}