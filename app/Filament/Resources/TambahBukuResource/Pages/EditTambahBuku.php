<?php

namespace App\Filament\Resources\TambahBukuResource\Pages;

use App\Filament\Resources\TambahBukuResource;
use App\Models\TambahBuku;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditTambahBuku extends EditRecord
{
    protected static string $resource = TambahBukuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(TambahBuku $record){
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}
