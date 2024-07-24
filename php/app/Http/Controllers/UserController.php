<?php
namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    public function signup(Request $request): View|Factory|Application
    {
        $name = $request->input('name');
    }

    public function append(Request $request): RedirectResponse
    {
        try {
            $message = $request->input('message', null);
            if (is_null($message)) {
                throw new \Exception;
            }
        } catch (\Exception $exception) {
            return redirect("content?warn=6");
        }
        Content::factory()->count(1)->state(["message" => $message])->create();
        return redirect("content");
    }
}
