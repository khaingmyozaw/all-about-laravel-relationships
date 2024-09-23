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

## For One to One Relationship
Check on methods in ```User``` and ```Lamborghini``` models named

```bash
lamborghini
```
```bash
user
```

Tables are named as ```users``` and ```lamborghinis```

## For One to Many Relationship
Check on methods in ```User``` and ```Shoe``` models named

```bash
shoes
```
```bash
user
```

## For One to Many Through Relationship
Check on methods in ```Project```, ```Client``` and ```Referral``` models named

```clients```, ```referrals```, ```project```, ```referrals```, ```client```