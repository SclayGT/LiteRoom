<?php

namespace App\Filament\Resources\TambahBukuResource\Pages;

use App\Filament\Resources\TambahBukuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTambahBukus extends ListRecords
{
    protected static string $resource = TambahBukuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
