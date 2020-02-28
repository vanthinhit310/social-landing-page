<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExtraController extends Controller
{
    /**
     * Lấy danh sách các quận huyện thuộc một tỉnh/thành phố
     * @param Request $request
     * @return JsonResponse
     */
    public function getDistricts(Request $request)
    {
        try{
            if ($request->ajax() && !empty($request->district_id)){
                $districts = District::whereMatp($request->district_id)->select('maqh','name')->get();
                return response()->json($districts)->setStatusCode(Response::HTTP_OK);
            }
        }catch(Throwable $th){
          dd($th->getMessage());
        }
    }

    /**
     * Lấy danh sách xã phường thị trấn của một quận/huyện
     * @param Request $request
     * @return JsonResponse
     */
    public function getWards(Request $request)
    {
        try{
            if ($request->ajax() && !empty($request->ward_id)){
                $wards = Ward::whereMaqh($request->ward_id)->select('xaid','name')->get();
                return response()->json($wards)->setStatusCode(Response::HTTP_OK);
            }
        }catch(Throwable $th){
            dd($th->getMessage());
        }
    }
}
