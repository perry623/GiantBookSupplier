@extends('./layout/layout')

@extends('./layout/headernav')

@section('content')
<div class="container d-flex  justify-content-center flex-column">
    <form action="{{route('upload')}}" method="POST" enctype= multipart/form-data>
        @csrf
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="user_email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="user_pass" class="form-control" id="inputPassword3">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                First radio
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Second radio
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
              <label class="form-check-label" for="gridRadios3">
                Third disabled radio
              </label>
            </div>
          </div>
        </fieldset>

        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile" name='gambar'>
          </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
</div>
    
@endsection

@extends('./layout/footer')