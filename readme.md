# crud-aves-backend

A **Laravel 5.2 (PHP)** REST API backend for managing a catalog of birds (*aves*), the countries (*países*) they inhabit, and geographic zones (*zonas*).

## What this is

This is a backend practice/coursework project built on top of the default Laravel framework skeleton. It exposes a simple CRUD API for birds, associating each bird with the countries/zones where it can be found. It appears to be a university or self-training exercise for learning Laravel and relational data modeling (birds ↔ countries ↔ zones, with a pivot table).

## Tech stack

- PHP, Laravel 5.2 framework
- MySQL (via Eloquent / raw `DB::table` queries)
- Laravel Elixir + Gulp for front-end asset compilation
- PHPUnit for testing

## Data model

- `tont_zona` — geographic zones
- `tont_paise` — countries, linked to a zone
- `tont_ave` — birds
- `tont_aves_paise` — pivot table linking birds to countries

## API routes (see `app/Http/routes.php`)

- `GET /ave` — list all birds
- `GET /ave/{id}` — bird by id (with its countries/zones)
- `GET /ave/zona/{zona}` — birds by zone
- `GET /ave/nombre/{nombre}` — birds by name
- `POST /ave` — create a bird
- `PUT /ave/{id}` — update a bird
- `DELETE /ave/{id}` — delete a bird
- `GET /pais`, `GET /zona` — list countries / zones

## How to run

```bash
composer install
cp .env.example .env
php artisan key:generate
# configure DB_* variables in .env, then run migrations
php artisan migrate
php artisan serve
```

## Context

Personal/coursework practice project for building a CRUD REST API with Laravel; not a production system.
