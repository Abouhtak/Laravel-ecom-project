
@php
                    use App\Models\Addcard;
        use App\Models\produit;
                    $order=Addcard::all();





@endphp
<div id="field"  class="scrollable-div">
@foreach ($order as $item )
 <div class="modal-body">


    <img style="width:40px ; hieght=40px" src="{{asset('img/mangas/'.$item->imge)}}" alt="">
        <h4 style="display:inline; margin-left:20px">{{$item->nom_p_card}}</h4>
        <div>  <center><p  style="display:inline;">Price: ${{$item->prix_card}}  <span class="custom-button">total:${{$item->totale}}</span></p></center></div>
        <p>Quantity:{{$item->q_card}}</p>
        <form action="{{route('destroyone',$item->produit_id_card)}}"  method="post">
            @csrf
                <button type="submit" class="btn bg-none top-button "><img src="{{asset('img/x-button.png')}}"  alt=""></button>
        </form>
        

      </div>
   <center>   ________________________________________________________</center>
@endforeach






</div>
