<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Module;

class ModulePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function alreadyEnrolled(User $user, Module $module)
    {
       return $module->beneficiaries->contains($user->id);
      
    }

    public function statusPublished(?User $user, Module $module)
    {
        if($module->status ==3){
        return true;
        }
        else {
            return false;
        }

    }
}
