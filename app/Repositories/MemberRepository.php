<?php

namespace App\Repositories;

use App\Models\Member;

class MemberRepository
{
  public function index()
  {
    $members = Member::all();
    return $members;
  }
  public function store($bodyData)
  {
    return Member::create($bodyData);
  }
  public function show($id)
  {
    $member = Member::find($id);
    return $member;
  }
  public function update($bodyData, $id)
  {
    $member = Member::find($id);
    $member->update($bodyData);
    return $member;
  }
  public function delete($test)
  {
    $member = Member::find($test); //找不到的話會是null
    // var_dump($member);
    // if (!$member) {
    //   return response([
    //     'message' => '找不到成員資料',
    //   ], 404);
    // }
    if (!$member) {
      return null;
    }
    $member->delete();
    return $member;
  }
}
