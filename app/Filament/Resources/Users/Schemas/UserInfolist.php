<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('email_verified_at')
                    ->dateTime(),
                TextEntry::make('phone2')
                    ->numeric(),
                TextEntry::make('phone')
                    ->numeric(),
                TextEntry::make('o_code'),
                TextEntry::make('device_name'),
                TextEntry::make('device_id'),
                TextEntry::make('other_name'),
                TextEntry::make('gender'),
                TextEntry::make('employee_id')
                    ->numeric(),
                TextEntry::make('assignment_id')
                    ->numeric(),
                TextEntry::make('r_id')
                    ->numeric(),
                TextEntry::make('r_role'),
                TextEntry::make('r_phone'),
                TextEntry::make('last_seen_at')
                    ->dateTime(),
                TextEntry::make('profile_photo'),
            ]);
    }
}
