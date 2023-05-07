<h1>Reçu d'achat</h1>

<p>Date d'achat: {{ $achat->created_at }}</p>
<p>Numéro de commande: {{ $achat->id }}</p>

<h2>Produit acheté:</h2>
<ul>
    <li>Nom: {{ $achat->product->name }}</li>
    <li>Description: {{ $achat->product->description }}</li>
    <li>Prix: {{ $achat->product->price }}</li>
</ul>

<h2>Fournisseur:</h2>
<ul>
    <?php
    use App\Models\User;
    $user = User::find($achat->product->fournisseur_id);
    ?>
    <li>Nom: {{ $user->name}}</li>
    <li>Prenom: {{ $user->firstname}}</li>
    <li>Adresse: {{ $user->email }}</li>

</ul>

<h2>Client:</h2>
<ul>
    <li>Nom: {{ $achat->user->name}}</li>
    <li>Prenom: {{ $achat->user->firstname}}</li>
    <li>Adresse: {{ $achat->user->email}}</li>


<h3>Montant payé: {{ $achat->product->price }}</h3>


