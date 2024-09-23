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