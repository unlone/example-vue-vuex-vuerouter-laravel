<?php
namespace App\Repositories;

class GenreRepository extends SeoRepository
{
    public function storeGenre($input)
    {
        $c = $this->candidate->create($input);

        $role = $this->findSeoble(str_slug($input['function']));
        $c->roles()->attach($role->id);

        $input['title'] = $input['first_name'] . ' ' . $input['last_name'];
        $input['slug'] = $input['title'];
        $input['seoble_id'] = $c->id;
        $input['seoble_type'] = 'App\Album';
        // $input['description_nl'] = $input['description'];
        // $input['description_en'] = $input['description'];

        $this->storeSeo($input);

    }

    public function updateGenre()
    {

    }

    public function deleteGenre()
    {

    }
}