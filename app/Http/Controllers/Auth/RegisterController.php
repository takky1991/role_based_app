<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Notifications\EmailVerification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\EmployerRegisterRequest;
use App\Http\Requests\CandidateRegisterRequest;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEmployerRegistrationForm()
    {
        return view('auth/register/employer');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCandidateRegistrationForm()
    {
        return view('auth/register/candidate');
    }

    public function registerAsCandidate(CandidateRegisterRequest $request)
    {
        event(new Registered($user = $this->createCandidate($request->all())));

        return $this->registeredCandidate($request, $user)
            ?: redirect($this->redirectPath());
    }

    public function registerAsEmployer(EmployerRegisterRequest $request)
    {
        event(new Registered($user = $this->createEmployer($request->all())));

        return $this->registeredEmployer($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Create a new candidate instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function createCandidate(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        $role = Role::whereName('candidate')->first(); 
        $user->attachRole($role);
    
        return $user;
    }

    /**
     * Create a new employer instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function createEmployer(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'job_title' => $data['job_title'],
            'company_name' => $data['company_name'],
            'company_url' => $data['company_url'],
            'company_size' => $data['company_size'],
        ]);

        $role = Role::whereName('employer')->first(); 
        $user->attachRole($role);
    
        return $user;
    }

    protected function registeredCandidate(CandidateRegisterRequest $request, $user)
    {
        $user->notify(new EmailVerification());
        flash(__('Confirm your email address to be able to login.'));
        return redirect(route('login'));
    }

    protected function registeredEmployer(EmployerRegisterRequest $request, $user)
    {
        $user->notify(new EmailVerification());
        flash(__('Confirm your email address to be able to login.'));
        return redirect(route('login'));
    }

    public function confirmEmail($token)
    {
        if($this->validEmailVerificationToken($token)){
            $user = User::whereToken($token)->first();
            $user->confirmEmail();
            flash(__('Email address confirmed. You can now login.'), 'success');

            return redirect(route('login'));            
        }

        flash(__('Token not valid!'), 'error');
        return redirect(route('login'));
    }

    public function validEmailVerificationToken($token){
        return User::whereToken($token)->exists();
    }
}
