<?php

namespace App\Filament\Resources\TransactionResource\Pages;

use App\Filament\Resources\TransactionResource;
use App\Models\Stock;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTransaction extends CreateRecord
{
    protected static string $resource = TransactionResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $stock = Stock::find($data['stock_id']);
        $stock->quantity -= $data['quantity'];
        $stock->save();
        
        return $data;
    }

}
