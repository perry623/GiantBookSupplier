@extends('./layout/layout')

@extends('./layout/headernav')

@section('content')
<div class="container d-flex flex-wrap justify-content-center py-3">
    <h1>Publishers</h1>
   
</div>
<div class="container-fluid d-flex flex-wrap justify-content-center flex-column flex-grow-1">
    <div class="container-fluid d-flex flex-wrap justify-content-center  py-4">
        @foreach ($publishers as $pub)
        <div class="card ms-3" id="book_card" style="width: 240px">
            <div class="container d-flex flex-wrap justify-content-center" >
                <img src={{$pub['logo']}} class="card-img-top"  style="width: 240px">
            </div>
            <div class="card-body" id="book_card_body">
                <h5 class="card-title" >{{$pub['name']}}</h5>
               
                <a href="/publisher/{{$pub['id']}}">
                    <button class="btn btn-primary" >Detail</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="pagination py-4 justify-content-center">
        {{ $publishers->links('pagination::bootstrap-4') }}
    </div>
</div>
    
@endsection

@extends('./layout/footer')