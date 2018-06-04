<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PublicationsController extends Controller
{
    public function create()
    {
        return view('publication-create');
    }

    public function showListPublications(){
      $users = User::all();
      return view('listPublications', compact('users'));
    }
}
