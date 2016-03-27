<?php
/**
 * Created by PhpStorm.
 * User: Traversi
 * Date: 16/03/2016
 * Time: 22:32
 */

namespace CodePress\CodeCategory\Controllers;

use Illuminate\Contracts\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests,DispatchesJobs, ValidatesRequests;

}