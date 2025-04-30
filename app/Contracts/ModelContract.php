<?php

/**
<<<<<<< HEAD
 * Definizione dell'interfaccia per i modelli dell'applicazione.
=======
<<<<<<< HEAD
 * Definizione dell'interfaccia per i modelli dell'applicazione.
=======
 * -- controllare.
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 */

declare(strict_types=1);

namespace Modules\User\Contracts;

use Illuminate\Database\Eloquent\Model;

/**
<<<<<<< HEAD
 * Interfaccia ModelContract che deve essere implementata dai modelli.
=======
<<<<<<< HEAD
 * Interfaccia ModelContract che deve essere implementata dai modelli.
=======
 * Modules\User\Contracts\ModelContract.
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
 *
 * @phpstan-require-extends Model
 *
 * @mixin \Eloquent
 */
interface ModelContract
{
    /**
     * Duplicate the instance and unset all the loaded relations.
     *
<<<<<<< HEAD
     * @return static The model instance without relations
=======
<<<<<<< HEAD
     * @return static The model instance without relations
=======
     * @return $this
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function withoutRelations();

    /**
     * Fill the model with an array of attributes. Force mass assignment.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $attributes Gli attributi da assegnare al modello
     * @return static Il modello stesso
=======
<<<<<<< HEAD
     * @param array<string, mixed> $attributes Gli attributi da assegnare al modello
     * @return static Il modello stesso
=======
     * @return $this
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function forceFill(array $attributes);

    /**
     * Save the model to the database.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $options Opzioni per il salvataggio
     * @return bool True se il salvataggio è avvenuto con successo, false altrimenti
=======
<<<<<<< HEAD
     * @param array<string, mixed> $options Opzioni per il salvataggio
     * @return bool True se il salvataggio è avvenuto con successo, false altrimenti
=======
     * @return bool
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function save(array $options = []);

    /*
         * Save a new model and return the instance. Allow mass-assignment.
         *
<<<<<<< HEAD
         * @param array<string, mixed> $attributes Gli attributi da assegnare al modello
         * @return static Il nuovo modello creato
=======
<<<<<<< HEAD
         * @param array<string, mixed> $attributes Gli attributi da assegnare al modello
         * @return static Il nuovo modello creato
=======
         * @return \Illuminate\Database\Eloquent\Model|$this
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

        public function forceCreate(array $attributes);
        */

    /**
     * Convert the model instance to an array.
     *
<<<<<<< HEAD
     * @return array<string, mixed> Il modello convertito in array
=======
<<<<<<< HEAD
     * @return array<string, mixed> Il modello convertito in array
=======
     * @return array
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function toArray();

    /**
     * Get the value of the model's primary key.
     *
<<<<<<< HEAD
     * @return string|int|null Il valore della chiave primaria
=======
<<<<<<< HEAD
     * @return string|int|null Il valore della chiave primaria
=======
     * @return string|int
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     */
    public function getKey();

    /*
     * Add a basic where clause to the query.
     *
     * @param  \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
<<<<<<< HEAD
     * @param  string $boolean
     * @return static
=======
<<<<<<< HEAD
     * @param  string $boolean
     * @return static
=======
     * @param  string  $boolean
     * @return $this
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev

    public function where($column, $operator = null, $value = null, $boolean = 'and');
    */

    /*
     * Execute the query and get the first result or throw an exception.
     *
<<<<<<< HEAD
     * @param  array|string $columns
=======
<<<<<<< HEAD
     * @param  array|string $columns
=======
     * @param  array|string  $columns
>>>>>>> 67cd443 (.)
>>>>>>> aurmich/dev
     * @return \Illuminate\Database\Eloquent\Model|static
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>

    public function firstOrFail($columns = ['*']);
    */
}
