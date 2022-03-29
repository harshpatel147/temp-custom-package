<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Admin App Layouts [default value = "admin.layouts.app"]
    |--------------------------------------------------------------------------
    |
    | This view path is used to extends the view. 
    | for example: you set path as like "admin.layouts.app" then it means app.blade.php exists at "resources/views/admin/layouts" directory
    |
    */

    'admin_app_layouts' => 'admin.layouts.app',

    /*
    |--------------------------------------------------------------------------
    | Route Urls 
    |--------------------------------------------------------------------------
    |
    | using that URLs you can access particular web page. 
    | for example: you set path as like "admin.layouts.app" then it means app.blade.php exists at "resources/views/admin/layouts" directory
    |
    |----- WARNING-NOTICE | CAUTION -------------------------------------------
    | if you are changing "Route Name", it will be affected to all over web functionality. So, Please Be Carefull
    |--------------------------------------------------------------------------
    |
    */
    'urls' => [
        'user-list' => 'admin/user',
        'user-create' => 'admin/user/create',
        'user-edit' => 'admin/user/edit/{id}'
    ],

    'table_names' => [
        'users' => 'users',
    ],
    'column_names' => [
        'contact_number' => 'contact_number',
    ],

    /* 
    |--------------------------------------------------------------------------
    | Model Path - that is used to initilize Model for perform DB operation in package 
    |--------------------------------------------------------------------------
    |
    | default value = \Smiley\UserCrud\Models\{Your_Model_Name}
    |
    |----- IMPORTANT FOR OVERRIDE MODEL ---------------------------------------
    | if you wants to overide the package's Model then, follow below steps
    |   # STEP 1 : create your Custom Model class and extend with package's Model Class which one you wants to change|override.
    |   # STEP 2 : if you doesn't published config then, publish package config file and then change Model's Namespace path `models <array `model_key_name`> with your Custom Model's Namespace Path.
    |
    |***** for example ***** I wants to override User Model then 
    |   # STEP 1 : I create User Model class at App\Models directory and extend with package's Model class like below 
    |       class User extends \Smiley\UserCrud\Models\User{ } 
    |   # STEP 2 : then I change model's namespace path like below
    |       'models' => [
    |           'user' => '\App\Models\User'
    |       ]
    |--------------------------------------------------------------------------
    |
    */

    'models' => [
        'user' => '\Smiley\UserCrud\Models\User'
    ]
];