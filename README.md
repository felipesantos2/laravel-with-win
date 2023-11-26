

## Laravel with a windows enviroment

```txt
    Verify php version

    8.2
```

```txt
    composer install

    composer require livewire/livewire
```

```txt
    create migration

    php artisan make:migration tasks
```
```txt
    create livewire component

    php artisan make:livewire helloworld
```

```txt

formas de criar rotas

Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/account/create', [AccountController::class, 'create'] )->name('account.create');
Route::post('/account/submit', [AccountController::class, 'store'])->name('account.store');
Route::get('/account/{id} ', [AccountController::class, 'show'])->name('account.show');

Route::controller(AccountController::class)->group(function () {
    Route::get('/account', 'index')->name('account.index');
    Route::get('/account/create', 'create')->name('account.create');
    Route::post('/account/submit', 'store')->name('account.store');
    Route::post('/account/{id}', 'show')->name('account.show');
});

```
<!--
    A pasta build não é versionada juntamente com a pasta vendor do composer.
    Acredito que tenho que rotar o build direto no servidor e instalar as dependências do composer novamente .
    ** npm run build **
    ** composer install **
 -->
```txt
Criação de front-ends modernos e dinâmicos com o PHP levou a criação do Livewire e do Alpine.js
TALL STACK => 
[
    Tailwind,
    Alpine,
    Laravel,
    Livewire,
]
```

```txt
    criando model, migration e controller com único comando
    php artisan make:model debts -c -m

```

