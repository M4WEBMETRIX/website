<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = array('web', 'app');
        $projects = '
            [
                {
                    "name": "m4academia",
                    "description": "A Learners Management System",
                    "filter": "web",
                    "img": "img/portfolio/m4academia.png"
                },
                {
                    "name": "UNN Business Directory",
                    "description": "A Listing platform for mini businesses",
                    "filter": "web",
                    "img": "img/portfolio/unnbizdir.png"
                },
                {
                    "name": "xTracker",
                    "description": "An expenses tracking mobile application",
                    "filter": "app",
                    "img": "img/portfolio/xtracker.png"
                },
                {
                    "name": "UNNConnect",
                    "description": "A market place for all students",
                    "filter": "app",
                    "img": "img/portfolio/unnconnect.png"
                },
                {
                    "name": "Portfolio App",
                    "description": "A Portfolio App",
                    "filter": "web",
                    "img": "img/portfolio/m4portfolio.png"
                }
            ]
        ';
        return view('index', ['projects'=>json_decode($projects, true), 'types'=>$types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
