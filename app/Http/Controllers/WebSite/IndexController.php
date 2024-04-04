<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebSite\ScheduleMeetingRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Mail\{ScheduleMeeting, ScheduleMeetingForDoctor};
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    /**
     * @method GET
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('website.pages.index');
    }

    /**
     * @method GET
     *
     * @return View
     */
    public function aboutUs(Request $request): View
    {
        return view('website.pages.about');
    }

    /**
     * @method GET
     *
     * @return View
     */
    public function services(Request $request): View
    {
        return view('website.pages.services');
    }

    /**
     * @method GET
     *
     * @return View
     */
    public function inspirate(Request $request): View
    {
        return view('website.pages.inspirate');
    }

    /**
     * @method GET
     *
     * @return View
     */
    public function ceo(Request $request): View
    {
        return view('website.pages.ceo');
    }

    /**
     * @method GET
     *
     * @return View
     */
    public function contact(Request $request): View
    {
        return view('website.pages.contact');
    }

    /**
     * Method to schedule a meeting
     *
     *
     * @param ScheduleMeetingRequest $request
     *
     * @method POST
     *
     * @return JsonResponse
     */
    public function scheduleMeeting(ScheduleMeetingRequest $request): JsonResponse
    {
        Mail::to('al221510887@gmail.com')->send(
            new ScheduleMeeting($request->validated())
        );
        // Mail::to($request->email)->send(
        //     new ScheduleMeeting($request->validated())
        // );

        Mail::to('al221510887@gmail.com')->send(
            new ScheduleMeetingForDoctor($request->validated())
        );

        return response()->json(['message' => 'Por favor revisar tu correo electrónico y confirma tu cita.']);
    }
}
