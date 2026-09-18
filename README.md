# IT0049 TFA1 Point of Sale Foundations

This project is a basic four-page Point-of-Sale website created using CodeIgniter 4. It demonstrates how routes, controllers, views, and static PHP arrays work together in a multi-page web application.

## Project Pages

- Home page
- About page
- Customer Accounts page
- User Accounts page

The Customer Accounts and User Accounts pages use static PHP arrays as temporary data sources. This version does not use a database.

## Technologies Used

- PHP 8.2
- CodeIgniter 4
- HTML
- CSS
- Composer
- Apache through XAMPP

## Project Structure

- `app/Config/Routes.php` contains the application routes.
- `app/Controllers/Pages.php` handles the Home and About pages.
- `app/Controllers/Customers.php` prepares customer data.
- `app/Controllers/Users.php` prepares user and staff data.
- `app/Views` contains the four page views.
- `public/css/style.css` contains the shared styling.

## Local Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/macharlizeornedo/IT0049-TFA1-POS.git