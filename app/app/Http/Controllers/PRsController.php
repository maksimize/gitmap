<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\PRsVM;
use Github\Client;

class PrsController extends Controller
{

    public function index(string $user, string $repo)
    {
        $client = new Client();
        $prs = $client->api('pulls')->all($user, $repo);
        $data['prs'] = (new PRsVM($prs))->getData();

        return view('prs', $data);
    }
}
