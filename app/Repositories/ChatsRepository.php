<?php
namespace App\Repositories;

use App\Models\Chats;
use App\Repositories\BaseRepository;

class ChatsRepository extends BaseRepository
{

    public function __construct(Chats $chats)
    {
        parent::__construct($chats);
    }

    public function getChats($id) {
        return $this->model->query()->where('User1', '=', $id)->orWhere('User2', '=', $id)->get();
    }

    public function getDetail($id) {

    }
}
