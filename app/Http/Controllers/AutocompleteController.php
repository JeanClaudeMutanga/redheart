<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AutocompleteController extends Controller
{
    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
        $query = $request->get('query');
        $data = DB::table('partners')
            ->where('code', 'LIKE', "%{$query}%")
            ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
        foreach($data as $row)
        {
        $output .= '
        <li><a href="#medicals">'.$row->code.'</a></li>
        ';
        }
        $output .= '</ul>';
        echo $output;
        }
    }

}
