<?php

namespace App\Services\Member;

use App\Repositories\MemberRepository;

class MemberService
{
  public function __construct(
    private readonly MemberRepository $memberRepository,
  ) {
  }

  public function index()
  {
    return $this->memberRepository->index();
  }

  public function store($bodyData)
  {
    return $this->memberRepository->store($bodyData);
  }

  public function show($id)
  {
    return $this->memberRepository->show($id);
  }

  public function update($bodyData, $id)
  {
    return $this->memberRepository->update($bodyData, $id);
  }

  public function delete($id)
  {
    return $this->memberRepository->delete($id);
  }
}
