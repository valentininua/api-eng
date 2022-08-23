<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Service\MessageGenerator;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    public function __construct(
        public MessageGenerator $messageGenerator
    ) {
    }

    public function index()
    {
        $data = $this->messageGenerator->getHappyMessage();
        return view('web.desk.index', [ 'data' => $data ]);
    }
}
