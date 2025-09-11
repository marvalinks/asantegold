<?php

namespace App\Http\Controllers;

use App\Services\MailchimpService;
use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    
    public function subscribe(Request $request, MailchimpService $mailchimp)
    {
        // dd(config('services.mailchimp.key'));
        $request->validate([
            'email' => 'required|email'
        ]);

        $result = $mailchimp->subscribe($request->email);

        if (isset($result['status']) && $result['status'] == 'subscribed') {
            return redirect()->route('thankyou.newsletter')->with('success', 'You have been subscribed!');
        }
        return redirect()->route('thankyou.newsletter')->with('success', 'You have been subscribed!');
        // return back()->with('error', $result['detail'] ?? 'Something went wrong.');
    }

}
