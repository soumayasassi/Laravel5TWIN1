<div class="card">

    <div class="card-content">
        <div class="content">
            <form method="post" action="{{ route('product.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nomproduit">Nom de produit</label>
                    <input type="texte" class="form-control" id="name"
                           placeholder="Nom de produit" name="name">


                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>

                </div>

                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="number" class="form-control" id="price" name="price">

                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock">


                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
