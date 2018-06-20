<div class="card {{ $cssClass }}">
    <div class="content">
        <img class="right floated mini ui image" src="{{ $image }}">
        <div class="header">
            {{ $title }}
        </div>
        <div class="meta">
            {{ $meta }}
        </div>
        <div class="description">
            {{ $body }}
        </div>
    </div>
    <div class="extra content">

        <a class="ui {{ $cssClass }} button right floated" href="{{ $button['url'] }}">
            <i class="github icon"></i>
            {{ $button['title'] }}
        </a>
    </div>
</div>
