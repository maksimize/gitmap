<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\PRsVM;
use Github\Client;

class PrsController extends Controller
{

    public function index()
    {
        $client = new Client();
        $prs = $client->api('pulls')->all('ampproject', 'amphtml');
        $data['prs'] = (new PRsVM($prs))->getData();

        return view('prs', $data);
    }
}
