<?php

namespace App\Repositories;

use App\Models\Member;

class MemberRepository
{
  public function store($bodyData)
  {
    return Member::create($bodyData);
  }
}
