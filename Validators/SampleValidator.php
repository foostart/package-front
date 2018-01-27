<?php namespace Foostart\Sample\Validators;

use Foostart\Category\Library\Validators\FooValidator;
use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;
use Foostart\Sample\Models\Sample;

use Illuminate\Support\MessageBag as MessageBag;

class SampleValidator extends FooValidator
{

    protected $obj_sample;

    public function __construct()
    {
        // add rules
        self::$rules = [
            'sample_name' => ["required"],
        ];

        // event listening
        Event::listen('validating', function($input)
        {
            self::$messages = [
                'sample_name.required' => trans('sample-admin.errors.required', ['attribute' => 'sample name']),
            ];
        });

        // set configs
        self::$configs = $this->loadConfigs();

        // model
        $this->obj_sample = new Sample();
    }

    /**
     *
     * @param ARRAY $input is form data
     * @return type
     */
    public function validate($input) {

        $flag = parent::validate($input);

        return $flag;
    }


    /**
     * Load configuration
     * @return ARRAY $configs list of configurations
     */
    public function loadConfigs(){
        $configs = [
            'min_lenght' => config('package-sample.name_min_length'),
            'max_lenght' => config('package-sample.name_max_length'),
        ];

        return $configs;
    }
}