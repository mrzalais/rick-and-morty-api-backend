<?php

namespace App;

use Illuminate\Support\Facades\Http;

class RickAndMortyApiClient
{
    private string $url = 'https://rickandmortyapi.com';

    public function getCharacters(): array
    {
        $response = Http::get($this->url . '/api/character');

        if (!$response->successful()) {
            return [];
        }

        return $response->json();
    }

    public function getCharacter(int $id)
    {
        $response = Http::get($this->url . '/api/character/' . $id);

        if (!$response->successful()) {
            return [];
        }

        return $response->json();
    }
}
