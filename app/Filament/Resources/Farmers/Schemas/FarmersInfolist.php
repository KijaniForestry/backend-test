<?php

namespace App\Filament\Resources\Farmers\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FarmersInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('registered_by_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('potential_farmer_id')
                    ->numeric(),
                IconEntry::make('is_institution')
                    ->boolean(),
                TextEntry::make('farmer_photo'),
                TextEntry::make('gender'),
                TextEntry::make('status'),
                TextEntry::make('first_name'),
                TextEntry::make('last_name'),
                TextEntry::make('other_name'),
                TextEntry::make('phone')
                    ->numeric(),
                TextEntry::make('phone2')
                    ->numeric(),
                IconEntry::make('has_national_id')
                    ->boolean(),
                TextEntry::make('r_group_id')
                    ->numeric(),
                TextEntry::make('r_pc_id')
                    ->numeric(),
                TextEntry::make('r_farmer_id')
                    ->numeric(),
                TextEntry::make('registered_date')
                    ->date(),
                TextEntry::make('r_registered_by')
                    ->numeric(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
                TextEntry::make('r_phone'),
                TextEntry::make('dob')
                    ->date(),
            ]);
    }
}
