# Blog API

A clean, minimal REST API built with **Laravel 13** for managing blog posts. This project demonstrates professional backend development practices suitable for a portfolio.

## Features

- RESTful API endpoints for posts
- SQLite database with migrations
- Eloquent ORM for database interactions
- API resource transformations
- Request validation
- Error handling with proper HTTP status codes
- Database seeders for testing
- PHPUnit test suite included

## Tech Stack

- **PHP**: 8.3+
- **Laravel**: 13.0
- **Database**: SQLite (configurable to MySQL/PostgreSQL)
- **Testing**: PHPUnit 12.5+

## Project Structure

```
blog-api/
├── app/
│   ├── Http/Controllers/     # API controllers
│   ├── Models/               # Eloquent models
│   └── Providers/            # Service providers
├── routes/
│   ├── api.php              # API routes
│   └── console.php          # Console commands
├── database/
│   ├── migrations/          # Database schema
│   ├── seeders/             # Database seeders
│   └── factories/           # Model factories
├── config/                  # Configuration files
├── storage/                 # Logs and cache
├── tests/                   # Test suite
└── bootstrap/               # Bootstrap files
```

## Installation

### Prerequisites
- PHP 8.3 or higher
- Composer
- SQLite or MySQL (if switching databases)

### Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/blog-api.git
   cd blog-api
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Initialize database:**
   ```bash
   php artisan migrate --seed
   ```

5. **Start the server:**
   ```bash
   php artisan serve
   ```

The API will be available at `http://localhost:8000`

## API Endpoints

### Posts

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/posts` | Get all posts |
| GET | `/api/posts/{id}` | Get a specific post |
| POST | `/api/posts` | Create a new post |
| PUT | `/api/posts/{id}` | Update a post |
| DELETE | `/api/posts/{id}` | Delete a post |

### Example Request

```bash
curl -X POST http://localhost:8000/api/posts \
  -H "Content-Type: application/json" \
  -d '{
    "title": "My First Post",
    "content": "This is the content of my first post."
  }'
```

### Example Response

```json
{
  "data": {
    "id": 1,
    "title": "My First Post",
    "content": "This is the content of my first post.",
    "created_at": "2026-03-31T18:04:01.000000Z",
    "updated_at": "2026-03-31T18:04:01.000000Z"
  }
}
```

## Testing

Run the test suite:

```bash
php artisan test
```

## Development Commands

| Command | Description |
|---------|-------------|
| `php artisan tinker` | Interactive REPL shell |
| `php artisan make:controller ControllerName` | Create controller |
| `php artisan make:model ModelName -m` | Create model with migration |
| `php artisan migrate:fresh --seed` | Reset and re-run all migrations |

## Environment Configuration

See `.env.example` for all available configuration options.

## License

This project is open-sourced software licensed under the [MIT License](LICENSE).
