<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_command.css') }}">
    <title>Document</title>
</head>

<body>
    <table class="table">
        @foreach ($command as $command)
        <tr>
            <th scope="row"><img src="{{asset('img/mangas/'.$command->imge)}}" alt=""></th>
            <td>{{$command->nom_p_card}}</td>
            <td>{{$command->totale}}</td>
            <td>
                <form action="{{route('destroyone',$command->produit_id_card)}}" method="post">
                    @csrf
                    <button type="submit" class="btn bg-none top-button"><img src="{{asset('img/x-button.png')}}"
                            alt=""></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

 <center><div class="buy-link">
        <a href="{{route('buy')}}">BUY</a>
    </div>
</center>   
</body>

</html>

