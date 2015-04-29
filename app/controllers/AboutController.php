<?php

class AboutController extends BaseController
{
    public function getResume()
    {
    return View::make('resume');   
    }

    public function getPortfolio()
    {
    return View::make('portfolio');   
    }
}