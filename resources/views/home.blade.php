@extends('./layout/layout')

@section('content')
<div class="container d-flex flex-wrap justify-content-center">

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

    <div class="pagination py-4 justify-content-center">
        {{ $books->links('pagination::bootstrap-4') }}
    </div>
</div>
    
@endsection

@extends('./layout/footer')