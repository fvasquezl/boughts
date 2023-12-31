<?php
/**
 * Created by PhpStorm.
 * User: fvasquez
 * Date: 5/02/19
 * Time: 05:10 PM
 */

namespace App\Http\Forms;


use App\User;
use Illuminate\Contracts\Support\Responsable;

class UserForm implements Responsable
{
    private $view;
    private $user;

    public function __construct($view, User $user)
    {
        $this->view = $view;
        $this->user = $user;
    }

    public function toResponse($request)
    {
        return view($this->view, [
            'user' => $this->user,
            'view' => $this->view,
            'page_title' => $this->view,
        ]);
    }
}