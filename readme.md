# Welcome to Basic Codeigniter API!

This project includes 4 main controllers (Users, Posts, Categories).

Each controller has the same functionality (Get all - GET, Get one - GET, Create new entry - POST, Update entry - PUT, Delete entry - DELETE).

<br>

### Installation by steps

1.  Configure your `base_url` here **application/config/config.php**
2.  Create database and setup it here **application/config/database.php**
3.  Install the tables in your phpmyadmin from here **your-app/database.sql**
4.  Protect your API, set to specify method for logging in **application/config/rest.php**
5.  Well done!

<br>

### Urls available:

*   GET: http://devskit.com/basic-codeigniter-api/api/history
*   GET: http://devskit.com/basic-codeigniter-api/api/users
*   GET (with: id'): http://devskit.com/basic-codeigniter-api/api/users/user
*   POST (with: name, email, password): http://devskit.com/basic-codeigniter-api/api/users/user
*   PUT (with: id, name, email, password): http://devskit.com/basic-codeigniter-api/api/users/user
*   DELETE (with id): http://devskit.com/basic-codeigniter-api/api/users/user

<br>

### The main files which you have to keep in mind:

*   **application/config/config.php** - Configure `base_url` and other things
*   **application/config/database.php** - Setup your database and insert the sql query from `your-app/database.sql
*   **application/config/autoload.php** - You don't have to change here anything for demo but keep in mind that here the libraries, models and other things are loaded
*   **application/config/rest.php** - Here you will improve the security for you API
*   **application/controllers/api/Categories.php** - Controller for categories
*   **application/controllers/api/Posts.php** - Controller for posts
*   **application/controllers/api/Users.php** - Controller for users
*   **application/core/MY_Controller.php** - Base controller extended by all API Controllers, also the history is registered here
*   **application/helpers/devskit_helper.php** - Custom functions

<br>

At the moment the model classes are not used, but you if you will have a more powerful application using them would be a good option.

*   application/models/Category_model.php
*   application/models/History_model.php
*   application/models/Post_model.php
*   application/models/User_model.php