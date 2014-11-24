<?php
//EXAMPLE 2
class PagesController extends BaseController {

    public function contact() {
        return View::make('about');
    }

}