<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Http\Resources\AdResource;
use App\Http\Requests\FilterAdRequest;
class AdController extends Controller
{

public function index(FilterAdRequest $request){
    $query = Ad::query();

    if ($request->filled('operator')) {
        $query->where('operator', $request->operator);
    }

    $perPage = $request->get('per_page', 5);

    $ads = $query->paginate($perPage);

  return response()->json([
    'status' => 'success',
    'message' => 'تبلیغات با موفقیت بازیابی شدند.',
    'data' => AdResource::collection($ads),
    'meta' => [
        'current_page' => $ads->currentPage(),
        'last_page'    => $ads->lastPage(),
        'total'        => $ads->total(),
        'per_page'     => $ads->perPage(),
        'next_page_url'=> $ads->nextPageUrl(),
        'prev_page_url'=> $ads->previousPageUrl(),
    ]
]);
}
}
