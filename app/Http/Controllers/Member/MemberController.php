<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Member\MemberRequest;
use App\Http\Resources\Member\MemberResource;
use App\Services\Member\MemberService;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function __construct(
        private readonly MemberService $memberService
    ) {
    }

    public function __invoke(MemberRequest $request)
    {
        $validatedData = $request->validated();
        $member = $this->memberService->store($validatedData);
        return MemberResource::make($member);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        if (!$members) {
            return response([
                'message' => '找不到成員資料',
            ], 404);
        }
        return response()->json([
            'data' => $members,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $createdData = Member::create($request->all());
        return response()->json([
            'data' => $createdData,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::find($id);
        if (!$member) {
            return response([
                'message' => '找不到成員資料',
            ], 404);
        }
        return response()->json([
            'data' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);
        if (!$member) {
            return response([
                'message' => '找不到成員資料',
            ], 404);
        }
        $member->update($request->all());
        return response()->json([
            'data' => $member,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        if (!$member) {
            return response([
                'message' => '找不到成員資料',
            ], 404);
        }
        $member->delete();
        return response()->json([
            'data' => $member,
        ]);
    }
}
