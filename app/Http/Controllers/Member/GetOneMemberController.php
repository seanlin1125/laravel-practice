<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Http\Resources\Member\MemberResource;
use App\Services\Member\MemberService;

class GetOneMemberController extends Controller
{
    public function __construct(
        private readonly MemberService $memberService
    ) {
    }

    public function __invoke(string $id)
    {
        $member = $this->memberService->show($id);
        return MemberResource::make($member);
    }
}
