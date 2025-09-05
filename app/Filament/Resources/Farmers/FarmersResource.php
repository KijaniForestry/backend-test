<?php

namespace App\Filament\Resources\Farmers;

use App\Filament\Resources\Farmers\Pages\CreateFarmers;
use App\Filament\Resources\Farmers\Pages\EditFarmers;
use App\Filament\Resources\Farmers\Pages\ListFarmers;
use App\Filament\Resources\Farmers\Pages\ViewFarmers;
use App\Filament\Resources\Farmers\Schemas\FarmersForm;
use App\Filament\Resources\Farmers\Schemas\FarmersInfolist;
use App\Filament\Resources\Farmers\Tables\FarmersTable;
use App\Models\Farmers;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FarmersResource extends Resource
{
    protected static ?string $model = Farmers::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'first_name';

    public static function form(Schema $schema): Schema
    {
        return FarmersForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FarmersInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FarmersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFarmers::route('/'),
            'create' => CreateFarmers::route('/create'),
            'view' => ViewFarmers::route('/{record}'),
            'edit' => EditFarmers::route('/{record}/edit'),
        ];
    }
}
