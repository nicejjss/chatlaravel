<?php

namespace App\Services\Chats;

use App\Repositories\ChatsRepository;

class DetailService
{
    private ChatsRepository $chatsRepository;

    public function __construct(ChatsRepository $chatsRepository)
    {
        $this->chatsRepository = $chatsRepository;
    }

    public function handle($id)
    {
       $firestore = app('firebase.firestore');
       dd($firestore);
    }
}
