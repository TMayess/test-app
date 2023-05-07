<div>
    <section class="section-list">
        <div class="div-list">
            <div class="div-crud">

                <h1>Modifier et supprimer Utilisateur</h1>

                <div class="div-rech">
                    <div class="div-recherche">
                        <input type="text" name="recherche" id="search" placeholder="Recherche" wire:model="search">
                    </div>
                </div>


                    <table class="table">
                        <thead>
                         <tr>
                     <th class="first-col" scope="col">ID</th>
                     <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th class="last-col" scope="col">action</th>

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
                                <td class="a-action"><a href="{{route('utilisateur.edit',$user)}}">modifier</a><a href="{{route('utilisateur.destroy',$user->id)}}">supprimer</a></td>



                                </tr>
                            @endforeach
                        </tbody>
                    </table>




            <div class=pagination>{{$users->links()}}</div>
            </div>
        </div>
    </section>

</div>

