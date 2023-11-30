<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\PokemonModel;

class FormController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function form_search(): void
    {
        $this->view->render("/Form/searchbyid", ["title" => "Trouver un Pokemon grâce à son id"]);
    }

    public function form_add(): void
    {
        $this->view->render("/Form/addpokemon", ["title" => "Ajouter un Pokemon"]);
    }

    public function getupdate(): void
    {
        $this->view->render("/Get/getupdate", ["title" => "Choisir le Pokemon à mettre à jour"]);
    }

    public function getdelete(): void
    {
        $this->view->render("/Get/getdelete", ["title" => "Choisir le Pokemon à mettre à jour"]);
    }

    public function form_update(): void
    {
        $getpokemon = PokemonModel::getbyparam(['name',$_POST["name"]]);
        $this->view->render("/Form/updatepokemon", ["title" => "Resultat de la recherche","getpokemon" => $getpokemon]);
    }

    public function form_delete(): void
    {
        $getpokemon = PokemonModel::getbyparam(['name',$_POST["name"]]);
        $this->view->render("/Form/deletepokemon", ["title" => "Result de la recherche", "getpokemon" => $getpokemon]);
    }
}
