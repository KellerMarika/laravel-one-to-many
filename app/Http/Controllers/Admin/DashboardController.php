<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Account;
use App\Models\Continent;
use App\Models\Country;
use App\Models\Region;
use App\Models\City;
use App\Models\Path;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/* INTERFACCIA PRIVATA LOGGATO */
class DashboardController extends Controller
{

  public function home(Request $request)
  {

    $request = $request->ip();


    $user = Auth::user();
    if ($user->is_superadmin == true) {


      $account = Account::all();



      $svgPaths = Path::all();
      $continents = Continent::all();
      $countries = Country::all();
      $regions = Region::all();
      $cities = City::all();

      /* passo dati diversi alla stessa view a seconda che sia superadmin o no*/
      return view('user.dashboard', compact('svgPaths', 'continents', 'request','user'));
    } else {
      /* passo dati diversi alla stessa view a seconda che sia superadmin o no*/
      return view('user.dashboard', compact('user'));
    }

  }

/*** ACCOUNT **************************************************/

}