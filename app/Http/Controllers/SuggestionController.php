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

        $arrays = ['item1' => $suggestion->item1, 'item2' => $suggestion->item2, 'item3' => $suggestion->item3];
        $num = 1;
        foreach ($arrays as $key => $array) {
            if ($num != $array) {
                $arrays[$request->item] += $num;
            }
        }
        $request->merge($arrays);
        $suggestion = new Suggestion();
        $suggestionNotEmpty = $suggestion::findById($request->post_id);
        if ($suggestionNotEmpty == true) {
            $suggestion->findById($request->post_id);
        }
        $suggestion->loadFromArray($request);
        $suggestion->save();
    }
}
