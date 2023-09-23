<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Http\Resources\Member\MemberResource;
use App\Services\Member\MemberService;

class GetAllMemberController extends Controller
{
    public function __construct(
        private readonly MemberService $memberService //這裡的MemberService可以當做是一種type型別屬性定義
    ) {
    }

    public function __invoke()
    {
        $members = $this->memberService->index();
        return MemberResource::collection($members);
    }
}
