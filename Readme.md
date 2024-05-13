### Next.js Landing Page with Form and Laravel Backend

This project implements a landing page with a form and connects it to a Laravel backend API.

#### Features
- Frontend built with Next.js 14 app router
- Styled form with Dropzone functionality for image uploads
- Form validation for required fields and email format
- Submission of form data to Laravel API
- Display of success or error messages based on API response
- Laravel backend with RESTful API for form submissions
- Resource API for Booking and Country with CRUD operations (Create, Read, Update, Delete)
- Sorting, filtering, and pagination for all listings
- Focus on best practices for API development (optional: API documentation)

#### Getting Started

#### 1. Backend
- Configure your database connection in `.env` file.
- Run migrations: `php artisan migrate`
- Seed your database with sample data (seeder files can be created).
- Start Laravel development server: `php artisan serve`
- Get JWT Login from `/api/login`

#### 2.Frontend
- Clone the repository.
- Configure a JWT from backend and REST Endpoint in `.env`
- Install dependencies: `npm install`
- Run the development server: `npm run dev`

### Project Structure
```
project/
├── frontend/  # Next.js frontend application
│   ├── components/  # Reusable components
│   ├── pages/  # Application pages
│   ├── styles/  # Global and component styles
│   └── ...  # Other Next.js files
├── backend/  # Laravel backend application
│   ├── app/  # Laravel application core
│   ├── config/  # Application configuration
│   ├── database/  # Database migrations and seeds
│   ├── routes/  # API routes definition
│   └── ...  # Other Laravel files
├── public/  # Static assets (images, fonts, etc.)
└── README.md  # This file
```

#### Technologies
- Frontend: Next.js 14 Typescript
- Backend: Laravel 11 (PHP framework)
- Database: MySQL (or compatible) - configure connection details in `.env`
- API Documentation framework (Postman Collection)

Feel free to contribute or raise issues on this project's repository.




