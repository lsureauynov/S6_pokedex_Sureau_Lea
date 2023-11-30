<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\PokemonModel;

class PokemonController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function list(): void
    {
        $pokemonList = PokemonModel::getAll();
        $this->view->render("/Result/listpokemon", ["title" => "Pokedex Complet", "pokemonList" => $pokemonList]);
    }

    public function add(): void
    {
        PokemonModel::add_pokemon($_POST);
        $pokemontoadd = PokemonModel::getbyparam(['name',$_POST['name']]);
        $this->view->render("/Result/addresult", ["title" => "Resultat", "pokemontoadd" => $pokemontoadd]);
    }


    public function search(): void
    {
        $pokemonbyid = PokemonModel::getbyparam(['id',$_POST["id"]]);
        $this->view->render("/Result/searchresult", ["title" => "Résultat", "pokemonbyid" => $pokemonbyid]);
    }


    public function update(): void
    {
        PokemonModel::update_pokemon($_POST["id"], ['name' => $_POST["newname"],'type' => $_POST["newtype"]]);
        $newpokemon = PokemonModel::getbyparam(['id', $_POST["id"]]);
        $this->view->render("/Result/updateresult", ["title" => "Resultat", "newpokemon" => $newpokemon]);
    }

    public function delete(): void
    {
        $pokemondelete = PokemonModel::getbyparam(['id',$_POST['id']]);
        PokemonModel::delete_pokemon($_POST['id']);
        $this->view->render("/Result/deleteresult", ["title" => "Résultat","pokemondelete" => $pokemondelete]);
    }

}
