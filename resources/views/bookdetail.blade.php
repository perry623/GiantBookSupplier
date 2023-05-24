@extends('./layout/layout')

@extends('./layout/headernav')
@section('content')
<div class="container d-flex flex-wrap justify-content-center py-5">
    <div class="card ms-3 " id="book_card" style="width: 600px">
        <div class="container d-flex flex-wrap justify-content-center" style="background-color: black">
            <img src={{$book['image']}} class="card-img-top"  style="width: 240px">
        </div>
        <div class="card-body" id="book_card_body">
            <h5 class="card-title font-weight-bold fw-bold" >{{$book['title']}}</h5>
            <p class="card-text">by {{$book['author']}}</p>
            <p class="card-text">Publisher : {{$book['namaPublisher']}}</p>
            <p class="card-text">Year {{$book['year']}}</p>
            <p class="card-text">Synopsis:</p>
           
            <p class="card-text">by {{$book['synopsis']}}</p>
        </div>
    </div>
</div>
    
@endsection

@extends('./layout/footer')