<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Http\Resources\Member\MemberResource;
use App\Services\Member\MemberService;

class PutMemberController extends Controller
{
    public function __construct(
        private readonly MemberService $memberService
    ) {
    }

    public function __invoke(MemberRequest $request, string $id)
    {
        $validatedData = $request->validated();
        $member = $this->memberService->update($validatedData, $id);
        return MemberResource::make($member);
    }
}
