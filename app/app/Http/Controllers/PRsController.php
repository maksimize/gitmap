<?php

namespace App\Http\Controllers;

use App\Http\ViewModels\PRsVM;
use Cache\Adapter\Redis\RedisCachePool;
use Github\Client;
use Redis;

class PrsController extends Controller
{

    public function index(string $user, string $repo)
    {
        $client = new Client();
        $redisClient = new Redis();
        $redisClient->connect('redis', 6379);
        $pool = new RedisCachePool($redisClient);
        $client->addCache($pool);

//        $prs = $client->api('pulls')->all($user, $repo, ['direction' => 'asc']);
        $prs = $client->api('pulls')->all($user, $repo);
        $data['prs'] = (new PRsVM($prs))->getData();

        return view('PRs.index', $data);
    }
}
