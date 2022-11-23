<?php


namespace App\Services\Users;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function create($data)
    {
        $data['password'] = Hash::make($data['password']);

        return $this->model->create($data);
    }

    public function update($data, $user)
    {
        if (isset($data['new_pass']))
        {
            $data['password'] = Hash::make($data['new_pass']);
        }

        return $user->update($data);
    }
}
