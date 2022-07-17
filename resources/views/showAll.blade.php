@extends('layout.AllPages')

@section('content')
     @if ($result->count()>0)
     <h3>Number of equipments : <span class="bold">  {{$result->count()}}</span></h3>
 <div class="products">
     <input type="text" name="search" id="search" placeholder="🔍search an equipment🔍"/>
          @foreach ($result as $res )
          <p class="output">  {{$res->id}} :  <a href="{{route('indi',['id'=>$res->id])}}">{{$res->name}}</a></p>

          
          @endforeach
          @else
           <div class="nofound">
           
          <h1>No products saved</h1>
           <a class="add" href="{{route('create')}}">add</a>
           </div>

              
          @endif
          <p id="no"></p>
</div>


@endsection
@section('script')
     <script src="{{asset('../js/script.js')}}" defer></script>
@endsection