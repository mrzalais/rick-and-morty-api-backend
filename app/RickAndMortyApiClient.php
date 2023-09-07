<?php

namespace App;

use Illuminate\Support\Facades\Http;

class RickAndMortyApiClient
{
    private string $url = 'https://rickandmortyapi.com';

    public function getCharacters(int $page): array
    {
        $response = Http::get(
            $this->url . '/api/character',
            [
                'page' => $page,
            ]
        );

        if (!$response->successful()) {
            return [];
        }

        return $response->json();
    }

    public function getCharacter(int $id): array
    {
        $response = Http::get(
            $this->url . '/api/character/' . $id
        );

        if (!$response->successful()) {
            return [];
        }

        return $response->json();
    }
}
