<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Str;

class Josnei extends Component
{
    public string $search = "";

    public function render()
    {
        return view('livewire.josnei', [
            // 'users' => User::query()->when($this->search, function ($query) {
            //     return $query->where('name', 'like', "%$this->search%");
            // })->get(),
            'users' => array_filter([
                new User([
                    'name' => 'Julio',
                ]),
                new User([
                    'name' => 'Jhessica',
                ]),
                new User([
                    'name' => 'Elisa',
                ]),
                new User([
                    'name' => 'Lidia',
                ]),
                new User([
                    'name' => 'Laura',
                ]),
            ], function (User $user) {
                return !Str::trim($this->search) || Str::match(
                    "/$this->search/i",
                    $user->name,
                );
            }),
        ]);
    }
}
