<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagRequest as StoreRequest;
use App\Http\Requests\TagRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TagCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Tag');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/tag');
        $this->crud->setEntityNameStrings('tag', 'tags');

        $this->crud->setColumns(['name', 'slug']);
      $this->crud->addField([
        'name' => 'name',
        'type' => 'text',
        'label' => "Tag name"
      ]);
      $this->crud->addField([
        'name' => 'slug',
        'type' => 'text',
        'label' => "URL Segment (slug)"
      ]);

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in TagRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        // You can pass a second parameter with the operation:
        // - "create" for Create
        // - "update" for Update
        // - nothing (missing) for both Create and Update

        $this->crud->addField($field_definition_array);
        $this->crud->addFields([$field_definition_array_1, $field_definition_array_2]);
        $this->crud->removeField('name');
        $this->crud->removeFields(['name_1', 'name_2']);

        // pro tip:
        // a quick way to add simple fields: let the CRUD decide what field type it is
        $this->crud->addField('db_column_name'); 
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
