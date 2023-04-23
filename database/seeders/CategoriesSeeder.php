<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
    ['name' => 'Lits', 'tag_categorie' => '#lits'],
    ['name' => 'Matelas', 'tag_categorie' => '#matelas'],
    ['name' => 'Sommiers', 'tag_categorie' => '#sommiers'],
    ['name' => 'Oreillers', 'tag_categorie' => '#oreillers'],
    ['name' => 'Armoires', 'tag_categorie' => '#armoires'],
    ['name' => 'Commodes', 'tag_categorie' => '#commodes'],
    ['name' => 'Dressings', 'tag_categorie' => '#dressings'],
    ['name' => 'Tables de nuit', 'tag_categorie' => '#tables-de-nuit'],
    ['name' => 'Canapés', 'tag_categorie' => '#canapes'],
    ['name' => 'Fauteuils', 'tag_categorie' => '#fauteuils'],
    ['name' => 'Table basses', 'tag_categorie' => '#tables-basses'],
    ['name' => 'Meuble TV', 'tag_categorie' => '#meubles-tv'],
    ['name' => 'Bibliothéque', 'tag_categorie' => '#bibliotheques'],
    ['name' => 'Etagères', 'tag_categorie' => '#etagères'],
    ['name' => 'Poufs', 'tag_categorie' => '#poufs'],
    ['name' => 'Ensembles de salon', 'tag_categorie' => '#ensembles-salon'],
    ['name' => 'Tables', 'tag_categorie' => '#tables'],
    ['name' => 'Chaises', 'tag_categorie' => '#chaises'],
    ['name' => 'Buffets', 'tag_categorie' => '#buffets'],
    ['name' => 'Vitrines', 'tag_categorie' => '#vitrines'],
    ['name' => 'Meubles de rangement', 'tag_categorie' => '#meubles-de-rangement'],
    ['name' => 'Table et chaises de cuisine', 'tag_categorie' => '#table-et-chaises-de-cuisine'],
    ['name' => 'Eviers et robinets', 'tag_categorie' => '#eviers-et-robinets'],
    ['name' => 'Meubles sous-vasque', 'tag_categorie' => '#meubles-sous-vasque'],
    ['name' => 'Colonnes de rangement', 'tag_categorie' => '#colonnes-de-rangement'],
    ['name' => 'Baignoires, douches et Robinetterie', 'tag_categorie' => '#baignoires-douches-et-robinetterie'],
    ['name' => 'Bureaux', 'tag_categorie' => '#bureaux'],
    ['name' => 'Chaises de bureau', 'tag_categorie' => '#chaises-de-bureau'],
    ['name' => 'Rangements de bureau', 'tag_categorie' => '#rangements-de-bureau'],
    ['name' => 'Fauteuils de direction', 'tag_categorie' => '#fauteuils-de-direction'],
    ['name' => 'Tables de réunion', 'tag_categorie' => '#tables-de-reunion']


        ];

        foreach ($categories as $categorie) {
            categories::create($categorie);
        }

    }
}
