<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\EngWord;
use Illuminate\Http\Request;
use App\Http\Resources\EngWordsResource;
use \DB;

use App\Http\Service\MessageGenerator;

class EngWordController extends Controller
{
    public function __construct(
        public MessageGenerator $messageGenerator
    )
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EngWordsResource::collection(EngWord::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $word = EngWord::create($request->all());
        return new EngWordsResource($word);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return EngWord::findOrFail($id);

        // dd(DB::table('eng_words')->where('uuid', '6b04696d-0a0b-4b98-8cc8-d730a6fb737c')->get());
        // return EngWord::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reandomText(): array
    {
        return [
            'HappyMessage' => $this->messageGenerator->getHappyMessage()
        ];
    }
}
