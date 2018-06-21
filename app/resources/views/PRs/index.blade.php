@extends('master')

@section('page')


    <div class="ui grid">
        <div class="fourteen wide column">
            <div class="cards ui">
                @foreach($prs as $pr)
                    @include('partials.card', [
                        'title' => $pr['since'],
                        'image' =>  $pr['user']['image'],
                        'meta' => '@' . $pr['user']['name'],
                        'body' => $pr['pr']['title'],
                        'cssClass' => $pr['cssClass'],
                        'button' => ['title' => '(#' . $pr['pr']['id'] . ')', 'url' => $pr['pr']['url']],
                    ])
                @endforeach
            </div>
        </div>


        <div class="two wide column">
            @include('PRs.filters')
        </div>
    </div>
@endsection
