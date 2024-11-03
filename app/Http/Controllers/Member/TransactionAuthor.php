<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class TransactionAuthor extends Controller
{
   /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();
        if ($user->hasRole("author")) {
            // Authors: Get all transactions associated with courses created by this author
            $transactions = Transaction::whereHas('details.course', function ($query) use ($user) {
                    $query->where('user_id', $user->id); // assuming 'author_id' is on the 'courses' table
                })
                ->with('details.course')
                ->latest()
                ->paginate(10);
                
            $title = "MY INCOME";

            return view('member.transaction.index', compact('transactions','title'));
        }
    }
}
