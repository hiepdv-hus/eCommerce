<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Base\BackendController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends BackendController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * ForgotPasswordController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}
