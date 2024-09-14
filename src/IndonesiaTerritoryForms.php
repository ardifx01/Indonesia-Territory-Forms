<?php

namespace Teguh02\IndonesiaTerritoryForms;

use Teguh02\IndonesiaTerritoryForms\Traits\HasProvinceForm;
use Filament\Forms\Components\Section;
class IndonesiaTerritoryForms {

    use HasProvinceForm;

    public static function make() {
        return Section::make(__('indonesia-territory-forms::indonesia-territory-forms.section_title'))
            ->schema([
                static::province_form(),
            ]);
    }
}