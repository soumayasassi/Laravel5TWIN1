
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
            <button type="submit"class="btnbtn-link">Supprimer</button>
            <button type="submit"class="btnbtn-link">Modifier</button>
            </td>
    </tr>
    @endforeach
 </tbody>
</table>
