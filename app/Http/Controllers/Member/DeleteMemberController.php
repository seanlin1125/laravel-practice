<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Resources\Member\MemberResource;
use App\Services\Member\MemberService;

class DeleteMemberController extends Controller
{
    public function __construct(
        private readonly MemberService $memberService //這裡的MemberService可以當做是一種type
    ) {
    }

    public function __invoke(string $id) 
    {
        $member = $this->memberService->delete($id);
        if ($member === null) {
            return response([
                'message' => '找不到成員資料'
            ], 404);
        }
        return MemberResource::make($member);
    }
}

// use App\Http\Requests\Member\MemberRequest;

// try {
//     $member = $this->memberService->delete($id);
//     // $this->onlineOfflinePathService->destroy($request->input('id'));
// } catch (ModelNotFoundException $e) {
//     return response()->json([
//         'message' => 'setting not found'
//     ], 404);
// }
// echo $member;
// echo '----';
// var_dump($member);
// return response($member);
