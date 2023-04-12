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
                <td><a href="{{route('utilisateur.edit',$user)}}"><img width="23px" src="{{asset('images/edit-icon1.png')}}" alt=""></a></td>
                <td>
                    <form action="{{route('utilisateur.destroy',$user->id)}}" method="POST" >
                        @csrf
                        @method('DELETE')
                       <button type="submit"><img width="26px" src="{{asset('images/supp-icon1.png')}}" alt=""></button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
</section>
@endsection

