# campus-lab

Laravel lab project for **PAU – Web and Mobile Apps Development 2 (2026)**: routes (GET, POST, PUT, DELETE), route parameters and constraints, and controllers.

## Requirements

- PHP 8.3+
- Composer
- Git

## How to run

```bash
git clone https://github.com/yazanjoulani77-cell/campus-lab.git
cd campus-lab
composer install
cp .env.example .env        # Windows: copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000 in your browser.

## Routes

| Method | URL | Handler | Result |
|--------|-----|---------|--------|
| GET | /hello | closure | Hello Laravel |
| GET | /students | StudentController@index | All Students: list |
| GET | /students/create | StudentController@create | Create Student Form |
| GET | /students/{id} | StudentController@show | Student ID: {id} |
| POST | /students | StudentController@store | Student Created |
| PUT | /students/{id} | StudentController@update | Student Updated: {id} |
| DELETE | /students/{id} | StudentController@destroy | Student Deleted: {id} |
| GET | /courses/{courseId}/students | CourseController@students | Students of Course ID: {courseId} |
| GET | /products/{id} | closure (`whereNumber('id')`) | Product ID: {id} (numbers only, otherwise 404) |
| GET | /students/{id}/edit | closure | Edit Student ID: {id} |

POST, PUT and DELETE must be tested with a tool such as Postman or curl, for example:

```bash
curl -X PUT http://127.0.0.1:8000/students/5
```

CSRF verification is disabled for `students` routes in `bootstrap/app.php` so these requests can be tested without a token (lab use only).
