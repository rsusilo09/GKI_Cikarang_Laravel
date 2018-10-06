<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class HomeController extends BaseController
{
    public function warta()
    {
      return View::make('pages.warta');
    }

    public function agenda()
    {
      return View::make('pages.agenda');
    }

    public function artikel()
    {
      return View::make('pages.artikel');
    }
}
