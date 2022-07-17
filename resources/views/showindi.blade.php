@extends('layout.AllPages')
@section('content')

<div class="description">
   <h1>{{$result->name}}</h1>
   <img src="{{Storage::url($result->product->path)}}" alt="">

   <p><span class="bold">quantity: </span> {{$result->quantity}}</p>
   <p> <span class="bold"> price: </span>{{$result->price}} FCFA</p>
   <p> <span class="bold"> Total Price : </span>{{$result->quantity * $result->price}} FCFA</p>
   <p> <span class="bold">bought on the: </span>{{$result->bought_day}}</p>    
   <p class="desc">{{$result->desc}}</p>
  
   <p class='delete'> <a href="{{route('delete',['id'=>$result->id])}}">delete</a> </p>

</div>


@endsection