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



```
all-about-laravel-relationships (master*) » php artisan tinker                                                          ~/Activities/all-about-laravel-relationships  
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

> 
```