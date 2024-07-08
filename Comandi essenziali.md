# Comandi essenziali: #

`composer install`

`php artisan key:generate` (mi da errore)

`npm i`

`php artisan serve` (lo devo fare dopo run dev a quanto pare mi da errore altrimenti)

`npm run dev`



## Controller e Model ##

### Il controller mi permette di dare i dati attraverso per esempio $dato, a una o più pagine attraverso il web.php. ###

`php artisan make:model MyModel` (con questo creo un modello, che sarà il DB)

`php artisan make:controller Folder/NameController` (creo il controller dove dentro ci metto le funzioni per le route)

### Il model va messo al singolare ###


## Migration ##
### Migration crea la struttura ###

`php artisan make:migration create_users_table` (creo una migration in database/migrations)

Esempio
```
$table->string('Azienda');
$table->string('Stazione di partenza')->nullable(); //Così può essere anche null
```

`php artisan migrate` (eseguo le migrazioni che ho creato)

`php artisan migrate:rollback` (torno allo status precedente, annulla tutto il bloccone di codice eseguito prima)

`php artisan migrate:reset` (resetto tutto quanto, hard delete praticamente)



## Seeder ##
### Seeder popola la struttura (Faker permette di fare il tutto in modo random) ###

`php artisan make:seeder UsersTableSeeder` (creo un seeder).
Alla fine della funzione serve il `->save()`;.
Esempio
```
$treno->save();
```

`php artisan db:seed --class=UsersTableSeeder` (eseguo il seed)

`public function run (Faker $faker)` da mettere nel seeder ci permette di compilare in automatico e casualmente
#### RICHIEDE: use Faker\Generator as Faker; ####
Esempio
```
    public function run(Faker $faker): void{
        for ($i=0; $i < 5 ; $i++) { 
            $treno = new Train();
            $treno->Azienda = $faker->name;
            $treno["Stazione di partenza"] = $faker->name;
            $treno->save();
        }
    }
```
#### Documentazione Faker ####
`https://fakerphp.org/`
#### Laravel column-type ####
`https://laravel.com/docs/10.x/migrations#available-column-types`



## Resource Controller ##
`php artisan make:controller --resource Guest/NomeController` così si crea un resource controller, il quale ci permette di creare una CRUD (Create, Read, Update/Patch, Delete).
### Controller direttamente collegato al model senza ricordarsi di fare l'import ###
`php artisan make:controller PhotoController --model=Photo --resource`

Nello show posso usare `findOrFail($id)` in modo tale che nel caso l'id non esista io ottenga automaticamente 404 error al posto dell'if
```
$gamesList = Comic::findOrFail($id);
```


