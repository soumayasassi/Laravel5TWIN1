<div class="card">
    <header class="card-header">
        <p class="card-header-title">Titre : {{ $product->name }}</p>
    </header>
    <div class="card-content">
        <div class="content">
            <p>Produit Prix : {{ $product->price }}</p>
            <p>Description :</p>
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>
