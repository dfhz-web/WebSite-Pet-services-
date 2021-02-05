<?php

namespace App\Http\Controllers\speciallyupdate;

use App\Http\Controllers\Controller;
use App\Models\Assistance;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Models\Answere;
use App\Models\Help;

class assignmentAnswere extends Controller
{
    public function store(Provider $provider, Assistance $assistance)
    {
                Answere::create([
                'assistance_id' => $assistance->id,
                'provider_id' => $provider->id,
                
                ]);
                

          
                return $provider;

    }
}