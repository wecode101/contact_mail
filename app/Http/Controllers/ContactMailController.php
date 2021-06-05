<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /**
     * Send Contact Email Function via Mail.
     *
     * @return RedirectResponse
     */
    public function contactSendMail(ContactRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        Mail::to("youremailaddress")->send(new ContactMail($validatedData));
        return back();
    }
}
