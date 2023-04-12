@extends('app')

@section('content')

<div class="div-crud">

    <div class="card-header">Modifier <strong>{{$user->name}}</strong></div>
    <form action="{{route('utilisateur.update',$user->id)}}" method="POST">
        @csrf
        <div >
                  <label for="name" >{{ __('Nom') }}</label>

                  <div class="col-md-12">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') ?? $user->name}}" required autocomplete="name" autofocus>

                      @error('name')
                          <span>
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
            </div>
            <div>
              <label for="email" >{{ __('Prenom') }}</label>

              <div >
                  <input id="firstname" type="text"
                  name="firstname" value="{{ old('email')?? $user->firstname }}" required autocomplete="firstname" autofocus>

                  @error('firstname')
                      <span  role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>
                <div >
                  <label for="email" >{{ __('Email') }}</label>

                  <div >
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                      name="email" value="{{ old('email')?? $user->email }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div>
                <label for="role">{{ __('Role') }}</label>

                <div>
                    <input type="radio" id="role_admin" name="role" value="admin" @if($user->role === 'admin') checked @endif>
                    <label for="role_admin">{{ __('Admin') }}</label>

                    <input type="radio" id="role_fournisseur" name="role" value="fournisseur" @if($user->role === 'fournisseur') checked @endif>
                    <label for="role_fournisseur">{{ __('Fournisseur') }}</label>

                    <input type="radio" id="role_client" name="role" value="client" @if($user->role === 'client') checked @endif>
                    <label for="role_client">{{ __('Client') }}</label>
                </div>

                @error('role')
                    <span role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

          <button type="submit">Modifier les informations</button>
        </form>
</div>
@endsection
