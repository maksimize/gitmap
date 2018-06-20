@extends('master')


@section('page')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">PRs Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button class="btn btn-sm btn-outline-secondary">Share</button>
                        <button class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    @foreach($prs as $pr)
                        <div class="col">
                            <div class="card {{  $pr['cssClass'] }}" style="width: 14rem;" >
                                <img class="card-img-top" src="{{ $pr['user']['image'] }}" style="width: 10rem;" >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pr['since'] }}</h5>
                                    <p class="card-text">{{ $pr['title'] }}</p>
                                    <a href="#" class="btn btn-primary">Go To PR</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </main>
@endsection
