<?php namespace GrahamCampbell\BootstrapCMS\Providers;

class UserProvider extends BaseProvider {

    protected $model = 'GrahamCampbell\BootstrapCMS\Models\User';

    // temp function that works
    public function index() {
        $model = $this->model;
        return $model::orderBy('first_name')->get(array('id', 'first_name', 'last_name', 'email'));
    }
}