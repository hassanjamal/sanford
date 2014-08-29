<?php

class AdminPackagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /adminpackages
	 *
	 * @return Response
	 */
	public function index()
	{
		$allPackages = Package::paginate(2);
		return View::make('admin.packages.index', compact('allPackages'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminpackages/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('admin.packages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminpackages
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Display the specified resource.
     * GET /adminpackages/{id}
     *
     * @param $package
     * @return Response
     */
	public function show($package)
	{
		$packageItems = Package::find($package->id)->packageitems()->get();
        return View::make('admin.packages.show', compact('package', 'packageItems'));
	}

    /**
     * Show the form for editing the specified resource.
     * GET /adminpackages/{id}/edit
     *
     * @param $package
     * @return Response
     */
	public function edit($package)
	{
		return View::make('admin.packages.edit', compact('package'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /adminpackages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adminpackages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}