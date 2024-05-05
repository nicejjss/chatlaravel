<?php

namespace App\Services\Chats;

use App\Repositories\ChatsRepository;

class IndexService
{
    private ChatsRepository $chatsRepository;

    public function __construct(ChatsRepository $chatsRepository)
    {
        $this->chatsRepository = $chatsRepository;
    }

    public function handle()
    {
        $userId = 1;
        return $this->chatsRepository->getChats($userId)->toArray();
    }
}
