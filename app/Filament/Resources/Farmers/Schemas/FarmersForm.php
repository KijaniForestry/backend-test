<?php

namespace App\Filament\Resources\Farmers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FarmersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('registered_by_id')
                    ->numeric(),
                TextInput::make('potential_farmer_id')
                    ->numeric(),
                Toggle::make('is_institution')
                    ->required(),
                TextInput::make('farmer_photo'),
                TextInput::make('gender'),
                TextInput::make('status')
                    ->required()
                    ->default('Pending'),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('other_name'),
                TextInput::make('phone')
                    ->tel()
                    ->numeric(),
                TextInput::make('phone2')
                    ->tel()
                    ->numeric(),
                Toggle::make('has_national_id')
                    ->required(),
                TextInput::make('r_group_id')
                    ->numeric(),
                TextInput::make('r_pc_id')
                    ->numeric(),
                TextInput::make('r_farmer_id')
                    ->numeric(),
                DatePicker::make('registered_date'),
                TextInput::make('r_registered_by')
                    ->numeric(),
                TextInput::make('r_phone')
                    ->tel(),
                DatePicker::make('dob'),
            ]);
    }
}
