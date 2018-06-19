<?php

namespace App\Http\ViewModels;

use Carbon\Carbon;

class PRsVM {

    protected $data;

    public function __construct(array $prs)
    {
        foreach ($prs as $pr) {
            $this->data[] = [
                'user' => ['image' => $pr['user']['avatar_url']],
                'title' => $pr['title'],
                'since' => $this->getSince($pr),
                'cssClass' => $this->getCssClass($pr),
            ];
        }

    }

    public function getSince(array $pr)
    {
        $created_at = new Carbon($pr['created_at']);

        return $created_at->diffForHumans();
    }

    public function getCssClass(array $pr)
    {
        $created_at = new Carbon($pr['created_at']);

        $diff = $created_at->diffInDays();

        if ($diff < 2) {
            return 'bg-success';
        }

        if ($diff < 4) {
            return 'bg-warning';
        }

        return 'bg-danger';
    }

    public function getData()
    {
        return $this->data;
    }

}
