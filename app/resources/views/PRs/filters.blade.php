<h3>Sort</h3>
<div class="ui vertical menu">
    <div class="ui item">
        <div class="ui vertical labeled icon fluid buttons">
            <a
                    class="{{ $pr['filters']['order'] == 'asc' ? 'disabled':'active' }} blue ui button"
                    href="{{ route('pulls', ['user' =>'vuejs', 'repo' => 'vue', 'order'=> 'asc']) }}"
            >
                Oldest
                <i class="sort amount up icon"></i>
            </a>
            <a
                    class="{{ $pr['filters']['order'] == 'asc' ? 'active':'disabled' }} blue ui button"
                    href="{{ route('pulls', ['user' =>$pr['repo']['owner'], 'repo' => $pr['repo']['repo'], 'order'=> 'desc']) }}"
            >
                Most Recent
                <i class="sort amount down icon"></i>
            </a>
        </div>
    </div>
</div>
<h3>Status</h3>
<div class="ui vertical menu">
    <div class="ui item">
        <div class="ui toggle checkbox">
            <input type="checkbox" name="public" {{ $pr['filters']['state'] == 'open' ? 'checked':'' }}>
            <label>Open</label>
        </div>
    </div>
    <div class="ui item">
        <div class="ui toggle checkbox">
            <input type="checkbox" name="public" {{ $pr['filters']['state'] == 'closed' ? 'checked':'' }}>
            <label>Closed</label>
        </div>
    </div>
    <div class="ui item">
        <div class="ui toggle checkbox">
            <input type="checkbox" name="public" {{ $pr['filters']['state'] == 'all' ? 'checked':'' }}>
            <label>All</label>
        </div>
    </div>
</div>
