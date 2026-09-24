# TANJ - Point of Sale System

## Setup Instructions

1. Ensure XAMPP is running (Apache and MySQL)
2. Place this project in `C:\xampp\htdocs\TANJ\`
3. Create the database `pos_db` in phpMyAdmin
4. Configure database settings in `.env` file (copy from `.env.example` if needed)
5. Ensure the database tables exist with the required structure

## Default Admin Account

The system comes with a pre-configured admin account:

- **Username:** admin
- **Password:** admin123
- **Email:** admin@example.com

**Important:** Change the default password after first login for security.

## Access Points

- **Home Page:** `http://localhost/TANJ/`
- **Login:** `http://localhost/TANJ/auth/login`
- **Register:** `http://localhost/TANJ/auth/register`
- **Admin Dashboard:** `http://localhost/TANJ/admin` (requires admin login)
- **View Records:** `http://localhost/TANJ/admin/view_records/users` (requires admin login)

## Database Configuration

- **Database Name:** pos_db
- **Host:** localhost
- **Username:** root
- **Password:** (empty)

Configuration is stored in `.env` file.

## Features

- User authentication (login/register)
- Admin dashboard for managing users and customers
- Customer management system
- User level system (admin)
- Secure session management

## Database Tables

The system requires the following tables:
- `users` - stores user accounts and authentication data
- `customers` - stores customer information

## Troubleshooting

If you encounter issues:
1. Ensure XAMPP services are running
2. Check that the database `pos_db` exists
3. Verify database connection settings in `.env` file
4. Check that required database tables exist
