# Laravel Prefix

## Example
```php
Route::group(['prefix' => backend_prefix()], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
```

Access url: `{base_url}/admin`
