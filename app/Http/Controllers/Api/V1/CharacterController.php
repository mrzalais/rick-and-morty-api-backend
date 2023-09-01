<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetCharacterRequest;
use App\RickAndMortyApiClient;
use Illuminate\Http\JsonResponse;

class CharacterController extends Controller
{
    public function __construct(private readonly RickAndMortyApiClient $apiClient)
    {
    }

    public function getCharacters(GetCharacterRequest $request): JsonResponse
    {
        $characters = $this->apiClient->getCharacters($request->input('page', 1));

        return response()->json($characters);
    }

    public function viewCharacter(int $id): JsonResponse
    {
        $character = $this->apiClient->getCharacter($id);

        return response()->json($character);
    }
}
