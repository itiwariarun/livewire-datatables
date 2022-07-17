<?php

namespace App\Http\Livewire;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Str;

class LivewireDatatables extends LivewireDatatable
{
    public $model = User::class;
    public function columns(){
        return[
            NumberColumn::name('id')->label('Id'),
            Column::name('name')->label('Name'),
            Column::name('email'),
            DateColumn::name('created_at')->label('Creation Date')
        ];
    }
  
}
