<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInviteCardRequest;
use App\Models\InviteCard;
use Illuminate\Http\Request;
use App\Repositories\InviteCardRepository;
use Exception;

class InviteCardController extends Controller
{
    /** @var InviteCardRepository */
    private $InviteCardRepository;

    /**
     * Create a new controller instance.
     *
     * @param  InviteCardRepository  $InviteCardRepository
     */
    public function __construct(InviteCardRepository $InviteCardRepository)
    {
        $this->InviteCardRepository = $InviteCardRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('invite-card');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInviteCardRequest $request)
    {
        // if($request->hasFile('image')){
        //     $request->image->store('categories', 'public');
        //     $category->image = $request->image->hashName();
        // }
        try {
            $this->userRepository->store($request->all());

            return $this->sendSuccess('Card Added successfully.');
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InviteCard  $inviteCard
     * @return \Illuminate\Http\Response
     */
    public function show(InviteCard $inviteCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InviteCard  $inviteCard
     * @return \Illuminate\Http\Response
     */
    public function edit(InviteCard $inviteCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InviteCard  $inviteCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InviteCard $inviteCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InviteCard  $inviteCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(InviteCard $inviteCard)
    {
        //
    }
}
