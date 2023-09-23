<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Http\Resources\Member\MemberResource;
use App\Services\Member\MemberService;

class StoreMemberController extends Controller
{
    public function __construct(
        private readonly MemberService $memberService //這裡的MemberService可以當做是一種type
    ) {
    }

    public function __invoke(MemberRequest $request) //有需要用到$request參數的時候就可以用FormRequest validation
    {
        $validatedData = $request->validated();
        $member = $this->memberService->store($validatedData);
        return MemberResource::make($member);
    }
}
