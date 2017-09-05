<?php

namespace App\Http\Controllers;



class myController extends Controller
{
	
	public function home()
	{
		return view('myIndexPage');
	}
	public function SteveJobs()
	{
		return view('aboutSteve');
	}
	public function Biography()
	{
		return view('lifeStory');
	}
	public function Pictures()
	{
		return view('img');
	}
}