# Guestbook Website with Laravel

![Web Screenshot](https://github.com/alfikiafan/laravel-guestbook/blob/master/public/images/screenshot.jpg)

This is a simple guestbook website project built using the Laravel framework without database. The website allows visitors to leave messages in the guestbook.

## Features

The website has the following main features:

1. **Home Page**: The home page displays a welcome message and provides a brief introduction to the guestbook.

2. **Guestbook Form**: Visitors can fill out a form to submit their name, email, and a message to be included in the guestbook.

3. **Post Result**: After submitting the form, visitors are redirected to a page that displays a confirmation message indicating that their post has been successfully added to the guestbook.

4. **View Guestbook**: The website provides a page where all the guestbook entries are listed in a table format. Each entry shows the name, email, and message. The other data is generated by Faker.

## How to Use

To run the guestbook website locally or on a server, follow these steps:

1. Clone the repository: `git clone https://github.com/alfikiafan/laravel-guestbook.git`

2. Install dependencies by running: `composer install`

3. Rename the `.env.example` file to `.env` and update the necessary configuration.

4. Generate an application key by running: `php artisan key:generate`

5. Run database migrations: `php artisan migrate`

6. Start the local development server: `php artisan serve`

7. Access the website in your browser at: `http://localhost:8000`

## Credits

- Image by GemmaRay23 from Pixabay: [Pixabay Profile](https://pixabay.com/users/gemmaray23-2870035/)
- Laravel Framework: [Laravel](https://laravel.com/)
- Bootstrap Framework: [Bootstrap](https://getbootstrap.com/)
- Faker PHP Library: [Faker PHP](https://fakerphp.github.io/)

## License
This website use [MIT License](https://opensource.org/licenses/MIT)

## Contact
This website created by [Alfiki Diastama Afan Firdaus](https://www.linkedin.com/in/alfiki/)