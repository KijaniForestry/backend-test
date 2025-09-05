<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('Pending'),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('phone2')
                    ->tel()
                    ->numeric(),
                TextInput::make('phone')
                    ->tel()
                    ->numeric(),
                TextInput::make('o_code'),
                TextInput::make('device_name'),
                TextInput::make('device_id'),
                TextInput::make('other_name'),
                TextInput::make('gender'),
                TextInput::make('employee_id')
                    ->numeric(),
                TextInput::make('assignment_id')
                    ->numeric(),
                TextInput::make('r_id')
                    ->numeric(),
                TextInput::make('r_role'),
                TextInput::make('r_phone')
                    ->tel(),
                DateTimePicker::make('last_seen_at'),
                TextInput::make('profile_photo'),
            ]);
    }
}
