<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\RickAndMortyApiClient;
use Illuminate\Http\JsonResponse;

class CharacterController extends Controller
{
    public function __construct(private readonly RickAndMortyApiClient $apiClient)
    {
    }

    public function getCharacters(): JsonResponse
    {
        $characters = $this->apiClient->getCharacters();

        return response()->json($characters);
    }

    public function viewCharacter(int $id): JsonResponse
    {
        $character = $this->apiClient->getCharacter($id);

        return response()->json($character);
    }
}
