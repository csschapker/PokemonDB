<?php
class SQL {
    static function allPokemon() {
        return "SELECT * FROM `POKEMON`";
    }

    static function pokemonById($id) {
        return "SELECT * FROM `POKEMON` WHERE pokemon_id=" . $id;
    }

    static function trainersOwningPokemon($id) {
        return "SELECT * FROM `OWNED_POKEMON` WHERE pokemon_id=" . $id;
    }

    static function pokemonOwnedByTrainer($id) {
        return "SELECT * FROM `OWNED_POKEMON` WHERE trainer_id=" . $id;
    }

    static function allTrainers() {
        return "SELECT * FROM `TRAINER`";
    }

    static function trainerById($id) {
        return "SELECT * FROM `TRAINER` WHERE trainer_id=" . $id;
    }

    static function allGyms() {
        return "SELECT * FROM `GYM`";
    }

    static function gymByName($id) {
        return "SELECT * FROM `GYM` WHERE gym_id=" . $id;
    }

    static function allTypes() {
        return "SELECT * FROM `TYPE`";
    }

    static function typeById($id) {
        return "SELECT * FROM `TYPE` WHERE type_id=" . $id;
    }

    static function allBadges() {
        return "SELECT * FROM `BADGE`";
    }

    static function badgeById($id) {
        return "SELECT * FROM `BADGE` WHERE badge_id=" . $id;
    }
}