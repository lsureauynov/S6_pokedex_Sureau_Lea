<?php

namespace App\Model;

use App\Core\Connect;

class PokemonModel extends Connect
{
    private string $id;
    private string $name;
    private string $type;

    /**
     * @return array<int,object>
     */
    public static function getAll(): array
    {

        $sql = "SELECT * FROM pokemon";
        $list = self::select($sql);

        $list = array_map(function ($pokemonData) {
            $pokemon = new PokemonModel();
            $pokemon->setId($pokemonData["id"]);
            $pokemon->setName($pokemonData["name"]);
            $pokemon->setType($pokemonData["type"]);
            return $pokemon;
        }, $list);
        return $list;
    }

    /**
     * @param array<int,string> $param
     * @return array<int,object>
     */
    public static function getByParam(array $param)
    {
        $key = $param[0];
        $value = $param[1];
        $sql = "SELECT id, name, type FROM pokemon WHERE $key = '$value'";
        $list = self::select($sql);


        $list = array_map(function ($pokemonData) {
            $pokemon = new PokemonModel();
            $pokemon->setId($pokemonData["id"]);
            $pokemon->setName($pokemonData["name"]);
            $pokemon->setType($pokemonData["type"]);
            return $pokemon;
        }, $list);

        return $list;
    }

    /**
     * @param array<string,string> $Pokemonarray
     */
    public static function add_pokemon($Pokemonarray): void
    {
        $newPokemonName = $Pokemonarray["name"];
        $newPokemonType = $Pokemonarray["type"];
        $sql = "INSERT INTO pokemon (name, type ) VALUES ('$newPokemonName','$newPokemonType')";
        self::execute($sql);
    }

    /**
     * @param array<string,string> $NewPokemonarray
     */
    public static function update_pokemon(string $OldPokemonId, $NewPokemonarray): void
    {
        $updatePokemonName = $NewPokemonarray["name"];
        $updatePokemonType = $NewPokemonarray["type"];
        $sql = "UPDATE pokemon SET name='$updatePokemonName', type='$updatePokemonType' WHERE id='$OldPokemonId'";
        self::execute($sql);
    }



    public static function delete_pokemon(string $PokemonId): void
    {
        $sql = "DELETE FROM pokemon WHERE id='$PokemonId'";
        self::execute($sql);

    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

}
