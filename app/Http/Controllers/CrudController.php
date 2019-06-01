<?php
namespace App\Http\Controllers;
use Backpack\CRUD\CrudPanel;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use App\Http\Controllers\Operations\SaveActions;
// use App\Http\Controllers\Operations\ListOperation;
// use App\Http\Controllers\Operations\ShowOperation;
// use App\Http\Controllers\Operations\CloneOperation;
// use App\Http\Controllers\Operations\CreateOperation;
// use App\Http\Controllers\Operations\DeleteOperation;
// use App\Http\Controllers\Operations\UpdateOperation;
// use App\Http\Controllers\Operations\ReorderOperation;
// use App\Http\Controllers\Operations\RevisionsOperation;
class CrudController extends Controller
{
    
    /**
     * @var CrudPanel
     */
    public $crud;
    public function __construct()
    {
        if (! $this->crud) {
            $this->crud = app()->make(CrudPanel::class);
            // call the setup function inside this closure to also have the request there
            // this way, developers can use things stored in session (auth variables, etc)
            $this->middleware(function ($request, $next) {
                $this->request = $request;
                $this->crud->request = $request;
                $this->setup();
                return $next($request);
            });
        }
    }
    /**
     * Allow developers to set their configuration options for a CrudPanel.
     */
    public function setup()
    {
    }
}