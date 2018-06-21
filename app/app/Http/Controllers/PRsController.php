<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\PRsVM;
use Cache\Adapter\Redis\RedisCachePool;
use Github\Client;
use Illuminate\Http\Request;
use Redis;

class PrsController extends Controller
{

    public function index(string $user, string $repo, Request $request)
    {
        $client = new Client();
        $redisClient = new Redis();
        $redisClient->connect('redis', 6379);
        $pool = new RedisCachePool($redisClient);
        $client->addCache($pool);

        $filters = $this->getFilters($request);
        $prs = $client->api('pulls')->all(
            $user,
            $repo,
            [
                'direction' =>$filters['order'],
                'state' => $filters['state']
            ]
        );

        $data['prs'] = (new PRsVM($prs, $filters))->getData();

        return view('PRs.index', $data);
    }

    private function getFilters(Request $request){
        $config = [];
        $config['order'] = $request->input('order', 'asc');
        $config['state'] = $request->input('state', 'open');

        return $config;
    }

}
