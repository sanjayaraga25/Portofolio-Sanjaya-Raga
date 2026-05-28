<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;

class ContactController extends Controller
{
    public function __construct(
        private ContactService $contactService
    ) {}

    public function store(ContactRequest $request)
    {
        $this->contactService->store($request->validated());

        if ($request->wantsJson()) {
            return response()->json(['message' => 'Pesan berhasil dikirim!']);
        }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
