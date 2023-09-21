<?php

namespace App\Services\Member;

use App\Repositories\MemberRepository;

class MemberService
{
  public function __construct(
    private readonly MemberRepository $memberRepository,
  ) {
  }

  public function store($bodyData)
  {
    return $this->memberRepository->store($bodyData);
  }
}
