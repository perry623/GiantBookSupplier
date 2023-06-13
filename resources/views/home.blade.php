@extends('./layout/layout')

@extends('./layout/headernav')
@section('content')
<div class="container d-flex flex-wrap justify-content-center py-3">
    @if ($name!=0)
            <h1>{{$name}} Books</h1>
    @else
            <h1>All Books</h1>
    @endif
</div>
<div class="container-fluid d-flex flex-wrap justify-content-center flex-column">
    <div class="container-fluid d-flex flex-wrap justify-content-center  py-4">
        @foreach ($books as $book)
        <div class="card ms-3" id="book_card" style="width: 240px">
            <img src={{$book['image']}} class="card-img-top" >
            <div class="card-body" id="book_card_body">
                <h5 class="card-title fw-bold" >{{$book['title']}}</h5>
                <p class="card-text">by {{$book['author']}}</p>
                <p class="card-text"></p>
                <a href="/detail/{{$book['id']}}">
                    <button class="btn btn-primary" >Detail</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="pagination py-4 justify-content-center">
    {{ $books->links('pagination::bootstrap-4') }}
</div>
    
@endsection

@extends('./layout/footer')