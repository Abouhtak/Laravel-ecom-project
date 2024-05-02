@extends('layoute.dashbord')
@section('layout')


<div class="col-sm-9">

<div class="container">
    @foreach ($produit as $item)


    <div class="product-card">

        <img src="{{asset('img/mangas/'.$item->img)}}" alt="Product Image">
        <h3>{{$item->nom_produit}} </h3>
        <p> {{$item->description_produit}}</p>
        <div class="buttons">
             <form action="{{ route('cart.add', $item->id) }}" style="display:inline;"  method="POST">
            @csrf
            <label for="quantite">Quantité :</label>
            <input type="number" id="quantite" name="quantite" min="1" value="1">
            <button type="submit" class="custom-button">Add to Cart</button>
        </form>
        <form action="{{ route('cart.add', $item->id) }}" style="display:inline;" method="POST">
            @csrf
            <button type="submit" class="btn btn-light">Detail...</button>
        </form>
        </div>
      </div>




    @endforeach
</div>





        </div>
      </div>

</div>
@endsection