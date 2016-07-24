<?php namespace Ntn\Configuration\Models;

use October\Rain\Database\Model;

class Configuration extends Model
{
    // used for automatic validation using the defined rules.
    use \October\Rain\Database\Traits\Validation;

    public $table = 'configurations';


    // public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'Ntn_Configuration';
    public $settingsFields = 'fields.yaml';

    protected $guarded = ['*'];

    protected $rules = [
        'key'         => 'required|unique:configurations',
        'value' => 'required',
        'description' => 'required',
    ];

}