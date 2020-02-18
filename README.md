# Images

![img](./docs/standard_emoticons.png?raw=true "img")

## Image types

- [GIF](https://en.wikipedia.org/wiki/GIF)
- [WebP](https://en.wikipedia.org/wiki/WebP)

## [Entity-Relationship Diagram](https://en.wikipedia.org/wiki/Entity–relationship_model)

![Google Structured data Entity-Relationship Diagram](./docs/erd.png?raw=true "Google Structured data Entity-Relationship Diagram")
This ERD is made with [Database schema designer](https://github.com/Agontuk/schema-designer).

## Code generation

### [Laravel Migrations](https://laravel.com/docs/master/migrations) to [SQL](https://en.wikipedia.org/wiki/SQL)

```
php artisan migrate
```
### [SQL](https://en.wikipedia.org/wiki/SQL) to [Eloquent Models](https://laravel.com/docs/master/eloquent)

```
php artisan code:models
```
In the target project development environment this shell script is part of the [Reliese Laravel](https://github.com/reliese/laravel) [Laravel](https://github.com/laravel/laravel) package.