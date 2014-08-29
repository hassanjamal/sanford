<?php

class AdminDashboardController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /admindashboard
     *
     * @return Response
     */
    public function index()
    {
        return View::make('admin.index');
    }
}
