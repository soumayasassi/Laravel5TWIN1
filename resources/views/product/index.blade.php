
<table border="1">
<thead>
<tr>
      <th>Id</th>
    <th>Nom du Produit</th>
    <th>Description</th>
    <th>Stock</th>
    <th>Prix</th>
    <th>Action</th>
    </tr>
  </thead>
<tbody>
@foreach($products as $product)
     <tr>
        <td>{{$product->id}}</td>
         <td>{{$product->name}}</td>
         <td>{{$product->description}}</td>
         <td>{{$product->stock}}</td>
         <td>{{$product->price}}</td>
         <td>
             <a class="btn btn-outline-success" href="{{ route('product.show',$product->id) }}">
                 Détails</a>
             <a class="btn btn-outline-success" href="{{ route('product.edit',$product->id) }}">Modifier</a>
             <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-outline-success">Supprimer</button>
             </form>


         </td>
    </tr>
    @endforeach
 </tbody>
</table>
