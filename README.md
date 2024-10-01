About Laravel Relationships
All about laravel relationships I collected as utility reason.

<ol>
<li>One to One Relationship</li>
<li>One to Many Relationship</li>
<li>One to Many Through Relationship</li>
</ol>

## Installation

```bash
git clone https://github.com/khaingmyozaw/laravel-mail-notification?tab=readme-ov-file.git
```
```bash
cp .env.example .env
```
```bash
composer install
```
```bash
php artisan key:generate
```
```bash
php artisan migrate --seed
```


## 1. One to One Relationship
Check methods on ```User``` and ```Lamborghini``` models named

```lamborghini```, ```user```

Tables are named as ```users``` and ```lamborghinis```

## 2. One to Many Relationship
Check methods on ```User``` and ```Shoe``` models named

```shoes```,```user```

## 3. One to Many Through Relationship
Check methods on ```Project```, ```Client``` and ```Referral``` models named

```clients```, ```referrals```, ```project```, ```referrals```, ```client```

## 4. Polymorphic
Here, this is a little advance. 

<detail>
Polymorphic relationships in Laravel allow a model to belong to more than one other model on a single association. This is useful when different models (e.g., Customer, Employee, User) share a common relationship with another model (e.g., Car) without having to duplicate database tables or create separate foreign key columns.
</detail>

Check methods on ```Customer```, ```Employee```, ```Car``` and ```User``` models named
```car``` and ```carable```

After running seeder, you can test it with ```laravel tinker```

```bash
php artisan tinker
```
Get first customer data for testing and then try to insert data into car migration.

<pre>
all-about-laravel-relationships (master*) » php artisan tinker
Psy Shell v0.12.4 (PHP 8.2.23 — cli) by Justin Hileman
> $customer = \App\Models\Customer::first();
= App\Models\Customer {#5509
    id: 1,
    name: "Justin Keber",
    created_at: "2024-09-26 04:35:35",
    updated_at: "2024-09-26 04:35:35",
  }

> $customer->car()->create(['name'=>'BMW']);
= App\Models\Car {#5158
    name: "BMW",
    carable_id: 1,
    carable_type: "App\Models\Customer",
    updated_at: "2024-09-26 04:39:33",
    created_at: "2024-09-26 04:39:33",
    id: 1,
  }
</pre>

Notice ```carable_type``` column. Laravel input the hole namespace into it.
You can modify it at ```boot()``` in ```app\Providers\AppServiceProvider.php``` like

<pre>
<code>
   public function boot(): void
    {
        Relation::morphMap([
            'employee' => 'App\Models\Employee',
            'customer' => 'App\Models\Customer',
            'user'     => 'App\Models\User',
        ]);
    }
</code>
</pre>

Now, when you try as begin, you should see like this.

<pre>
all-about-laravel-relationships (master*) » php artisan tinker
Psy Shell v0.12.4 (PHP 8.2.23 — cli) by Justin Hileman
> $employee = \App\Models\Employee::first();
= App\Models\Employee {#5509
    id: 1,
    name: "Justin Keber",
    created_at: "2024-09-26 04:35:35",
    updated_at: "2024-09-26 04:35:35",
  }

> $employee->car()->create(['name'=>'Toyota']);
= App\Models\Car {#5158
    name: "BMW",
    carable_id: 1,
    carable_type: "employee",
    updated_at: "2024-09-26 04:39:33",
    created_at: "2024-09-26 04:39:33",
    id: 1,
  }
</pre>