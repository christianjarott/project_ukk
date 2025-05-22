<?php

namespace App\Filament\Resources\IndustriResource\Pages;

use App\Filament\Resources\IndustriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateIndustri extends CreateRecord
{
    protected static string $resource = IndustriResource::class;

    protected function getCreatedNotificationRedirectUrl(): ?string
    {
        return static::getResource()::getUrl('index');
    }
}
