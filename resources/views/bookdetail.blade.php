@extends('./layout/layout')

@section('content')
<div class="container d-flex flex-wrap justify-content-center">
    <div class="card ms-3 " id="book_card" style="width: 600px">
        <div>
            <img src={{$book['image']}} class="card-img-top"  style="width: 240px">
        </div>
        <div class="card-body" id="book_card_body">
            <h5 class="card-title" >{{$book['title']}}</h5>
            <p class="card-text">by {{$book['author']}}</p>
            <p class="card-text"></p>
           
            <p class="card-text">by {{$book['synopsis']}}</p>
        </div>
    </div>
</div>
    
@endsection

@extends('./layout/footer')