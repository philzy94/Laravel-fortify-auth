@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">forgot-password</div>
                  <div class="card-body">
                  @if (Session::has('errors'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('errors')->first() }}
                        </div>
                    @endif
                    @if (Session('status'))
                        <div class="alert alert-success" role="alert">
                           {{Session('status')}}
                        </div>                        

                    @endif
                   
                      <form action="" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="phone_number" class="col-md-4 col-form-label text-md-right">Email</label>
                              <div class="col-md-6">
                                  <input type="text" id="email" class="form-control" name="email" required autofocus>
                                 
                              </div>
                          </div>

                          <div class="bg-red-100 border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                     
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Submit
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection