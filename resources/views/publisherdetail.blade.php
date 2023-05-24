@extends('./layout/layout')

@extends('./layout/headernav')
@section('content')
<div class="container d-flex  py-3 justify-content-center">
    <div class="d-flex card align-items-center container" style="width: 100vw;">
        <div>
            <img src={{$publisher['logo']}}  style="width: 240px">
        </div>
        <div>
            <h3 class="card-title">{{$publisher['name']}}</h3>
            <h5>{{$publisher['address']}}</h5>
            <h5>{{$publisher['phone']}}</h5>
            <h5>{{$publisher['email']}}</h5>
            <hr>
        </div>

    </div>
    
</div>
<div class="container d-flex justify-content-center"> 
    <h3>Books Published:</h3> 
</div>
<div class="container-fluid d-flex flex-wrap justify-content-center flex-column">
    <div class="container-fluid d-flex flex-wrap justify-content-center  py-4">
        @foreach ($books as $book)
        <div class="card ms-3" id="book_card" style="width: 240px">
            <img src={{$book['image']}} class="card-img-top" >
            <div class="card-body" id="book_card_body">
                <h5 class="card-title" >{{$book['title']}}</h5>
                <p class="card-text">by {{$book['author']}}</p>
                <p class="card-text"></p>
                <a href="/detail/{{$book['id']}}">
                    <button class="btn btn-primary" >Detail</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination py-4 justify-content-center">
        {{ $books->links('pagination::bootstrap-4') }}
    </div>
</div>
    
@endsection

@extends('./layout/footer')