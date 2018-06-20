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
            <h3>Status</h3>
            <div class="ui vertical menu">
                <div class="ui item">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="public">
                        <label>Open</label>
                    </div>
                </div>
                <div class="ui item">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="public">
                        <label>Merged</label>
                    </div>
                </div>
                <div class="ui item">

                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="public">
                        <label>Closed</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
