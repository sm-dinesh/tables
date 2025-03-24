<?php

namespace Filament\Tables\Concerns;

trait IsCustomTable
{
    public function bootedIsCustomTable(){
        $this->customTable = true;
    }
}