<div class="card-group">
    @foreach (json_decode($products) as $product)
        <div class="card">
            <img class="card-img-top" src="{{ $product ->image }}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{ $product ->name }}</h5>
            <p class="card-text">{{ $product ->description }}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    @endforeach
</div>
