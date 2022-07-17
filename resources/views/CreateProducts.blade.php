@extends('layout.AllPages')
@section('content')
<div class="errors">

    @if ($errors->any())
        @foreach ($errors->all() as $error )
            <p class="err">{{$error}}</p>
        @endforeach
    @endif
</div>
<div class="for">
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" class="create">
        @csrf
        <div class="one">
            
            <input type="text" name="name" id="name" autofocus placeholder="name" value="{{old('name')}}">
        </div>
        <div class="two">

            <input type="number" name="quantity" id="number" placeholder="quantity" value="{{old('quantity')}}">
            <input type="number" name="price" id="price" placeholder="price" value="{{old('price')}}">
            <input type="date" name="date" id="date" autofocus placeholder="date" value="{{old('date')}}">
            <input type="file" name="picture" id="picture">
        </div>
        <div class="three">

            <textarea name="desc" id="desc"  placeholder="product description">
                {{old('desc')}}</textarea> 
        </div>
        <button type="submit">submit product</button>
            
    </form>

</div>
@endsection