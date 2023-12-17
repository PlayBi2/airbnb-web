<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserItem extends Component
{
    public $user;
    public function render()
    {
        $getUserById = DB::table('users')->where('id', $this->user->id)->first();
        return view('livewire.user-item',[
            'user' => $getUserById
        ]);
    }
}
