{{-- <table class="table">
    <thead>
     <tr>
 <th scope="col">#</th>
 <th scope="col">Nom</th>
<th scope="col">Email</th>
<th scope="col">Roles</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
@foreach($users as $user)
          <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role}}</td>
          <td>
           <a href=""><button >Editer</button></a>


           <form action="" method="POST" class="d-inline">
               @csrf
               @method('DELETE')
               <button type="submit" >Supprimer</button>
           </form>

          </td>
         </tr>
          @endforeach

</tbody>
</table> --}}
@extends('app')
@section('content')


@include('part.sidebarnav')
<section class="section-ajout">
    <div class="div-crud">
        <form enctype="multipart/form-data" action="{{ route('article.index') }}" method="POST">
            @csrf

            <!-- Affichage du message flash de succès, s'il existe -->
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif


            <h1>Ajouter un nouvel utilisateur</h1>

            <div>
                <label for="name">Nom </label>
                <input type="text" name="name" id="name" class="form-input">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="price">Prenom</label>
                <input type="text" name="price" id="price" class="form-input">
                @error('price')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="reference_product">Email</label>
                <input type="text" name="reference_product" id="reference_product" class="form-input">
                @error('reference_product')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="dimensions">Role</label>
                <input type="text" name="dimensions" id="dimensions" class="form-input">
                @error('dimensions')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


            <div class="div-btn"><button type="submit">Ajouter</button></div>
        </form>
    </div>
<div class="div-crud">
    <form action="{{ route('article.index') }}" method="POST">
        @csrf
        <h1>Modifier et supprimer Utilisateur</h1>

        <input class="input-recherche" type="text" name="recherche" id="recherche" placeholder="Recherche"  >

    <table class="table">
        <thead>
         <tr>
     <th class="first-col" scope="col">ID</th>
     <th scope="col">Nom</th>
    <th scope="col">Prenom</th>
    <th scope="col">Email</th>
    <th scope="col">Role</th>
    <th scope="col"></th>
    <th class="last-col" scope="col"></th>

    </tr>
    </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><a href=""><img width="23px" src="{{asset('images/edit-icon1.png')}}" alt=""></a></td>
                <td><a href=""><img width="26px" src="{{asset('images/supp-icon1.png')}}" alt=""></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </form>
</div>
</section>
@endsection

