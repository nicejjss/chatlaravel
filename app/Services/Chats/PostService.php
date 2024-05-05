<?php

namespace App\Services\Chats;

use App\Repositories\ChatsRepository;

class PostService
{
    private ChatsRepository $chatsRepository;

    public function __construct(ChatsRepository $chatsRepository)
    {
        $this->chatsRepository = $chatsRepository;
    }

    public function handle($data)
    {

    }
}
