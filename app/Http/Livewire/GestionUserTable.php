<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GestionUserTable extends Component
{
    public string $search = '';
    public function render()
    {
        $users = User::select('*')
        ->where('users.name','LIKE', "%{$this->search}%")
        ->paginate(10);
        return view('livewire.gestion-user-table',['users' => $users]);
    }
}
