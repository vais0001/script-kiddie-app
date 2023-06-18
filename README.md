# Laravel IDOR Prevention Demo

This is a Laravel application that demonstrates the use of Access Control and prevention of Insecure Direct Object Reference (IDOR) in a Laravel application.

## Features

1. **User Authentication:** User registration and login functionality are provided by Laravel Breeze.
2. **Access Control:** Access control is implemented using Laravel's built-in middleware. In this application, only authenticated users are allowed to create and view posts.
3. **IDOR Prevention:** This application also prevents IDOR by ensuring that a user can only view the posts that they have created.

## Setup and Installation

1. **Clone the Repository:** Run `git clone https://github.com/vais0001/script-kiddie-app.git` to clone this repository to your local machine.
2. **Install Dependencies:** Navigate into the cloned directory and run `composer install` to install Laravel and other PHP dependencies.
3. **Environment Variables:** Copy the `.env.example` file to a new file named `.env` and fill in your database and other necessary configurations.
4. **Generate App Key:** Run `php artisan key:generate` to generate a new application key.
5. **Run Migrations:** Run `php artisan migrate` to create the necessary tables in your database.

## Testing Access Control and IDOR Prevention

After setting up the application, you can test the access control and IDOR prevention features by following these steps:

1. **User Registration:** Register a new user by visiting the `/register` endpoint or clicking the register button on the top right of the screen and filling in the registration form.
2. **User Login:** Log in using the registered user's credentials by visiting the `/login` endpoint or the login button.
3. **Create Posts:** After logging in, navigate to '/posts/create' or press on the 'Posts' tab in the navbar and press the 'Create post' button.
4. **Viewing Posts:** Navigate to `/posts` or press the 'Posts' button in the navbar to view the list of posts. You will only see the posts that you have created.
5. **IDOR Prevention:** Try to view posts created by other users by manually changing the `{id}` in the URL. You will not be able to see posts that were not created by you.

Enjoy exploring the application and feel free to use this as a reference for implementing access control and preventing IDOR in your own Laravel applications!

### Created by Dominykas Vaisnoras
