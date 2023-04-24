<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function update(Request $request)
    {
        $suggestion = Suggestion::findById($request->post_id);
        $user_ids = json_decode($suggestion->user_id);

        $arrays = ['item1' => $suggestion->item1, 'item2' => $suggestion->item2, 'item3' => $suggestion->item3];

        $num = 1;
        foreach ($arrays as $array) {
            if ($num != $array) {
                $arrays[$request->item] += $num;
            }
        }
        $request->merge($arrays);
        $arr = [];

        foreach ($user_ids as $key => $value) {
            $arr += [$key => $value];
            $arr += [$request->item => $request->user_id];
        }

        $suggestion->user_id = json_encode($arr);
        $suggestion->item1 = $request->item1;
        $suggestion->item2 = $request->item2;
        $suggestion->item3 = $request->item3;
        $suggestion->save();
    }
}
