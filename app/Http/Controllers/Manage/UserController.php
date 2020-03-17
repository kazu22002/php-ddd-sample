<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2020-03-17
 * Time: 21:21
 */

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $this->validate($request, [
            'id' => 'integer',
        ]);
        if (!empty($request->get('id'))) {
            $user = $this->repo->findById($request->get('id'));
        } else {
            $user = [];
        }

        return response()->json(['param' => $user]);
    }
}
