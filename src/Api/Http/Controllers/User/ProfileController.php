<?php

namespace Api\Http\Controllers\User;

use Api\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Core\User\UserManager;
use Core\User\UserSerializer;

class ProfileController extends Controller
{

    /**
     * Construct
     *
     */
    public function __construct(UserManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Display current user
     *
     * @param Request $request
     *
     * @return response
     */
    public function index(Request $request)
    {
        return $this->success(['data' => ['resource' => $this->manager->serializer->serialize(\Auth::user())]]);
    }
}
