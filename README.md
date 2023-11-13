

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
<!--
    A pasta build não é versionada juntamente com a pasta vendor do composer.
    Acredito que tenho que rotar o build direto no servidor e instalar as dependências do composer novamente .
    ** npm run build **
    ** composer install **
 -->
