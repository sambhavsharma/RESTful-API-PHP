RESTful-API-PHP
===============

NOTE: This is not a good project to learn how to make REST APIs in PHP. This has some major desgin flaws, which I will e working on. For example this usus sessions to laogin to the API, but that would only work with browsers, we must use HTTP AUTH or tokens like JWTs. Implement OAuth maybe. Also all the requests hit the database. There is no cacheing. We can add a layer of cacheing (Redis, Varnish etc). There are some other design flaws as well. I will be fixing them one by one as and when I get time.

A basic RESTful api and authentication in PHP for an online store

This is a very simple and basic REST api for an online store. This provides basic authentication and REST api's for CRUD operations on store items.

The API is written in PHP with MySQL as the datastore.


STEPS FOR SETTING IT UP
----------------------------

Server
I used apache while development. But this should work on any server with supports .htaccess file configuration, since I use it for routing.

Database
The code assumes MySQL as server.

I have written scripts to automate the database setup.

Change the credentials in db_operations/connect.php file. Once that is done, execute db_operations/setup_database.php file.

The setup_database.php file will create a database named 'sambhav' and then create a user table and an item table. It will add a default user with username 'admin' and password 'password'. It will also add two dummy items.



ROUTES
--------------
Following are the routes defined for the api and their description


User
/api/user/login [POST]: Login for the api. The routes for items can not be accessed until a user has loggedin. It requires two $_POST params, viz. 'username' and 'password'

/api/user/logout [GET]: Logout from the session

/api/user [GET]: Returns the details of the user if logged in.

Item
/api/item/{id} [GET]: Returns the details for the item with given id.

/api/item [GET]: Returns the list of all items.

/api/item [POST]: Adds a new item in the database. It requires two $_POST params, viz. 'name' and 'price'.

/api/item/{id} [PUT]: Updates the item with the given id.

/api/item/{id} [DELETE]: Removes the item from the database


SAMPLE REQUESTS
-------------------
Following are the routes defined for the api and their description


Important User and Item request samples!
[POST] /api/user/login -d '{"username":"admin", "password":"password"}' : It accepts JSON as well as form data. Returns 'Successful login!', 'Username or Password not provided!' and 'Invalid Credentials!' as applicable

[GET] /api/item/5 : Returns item details ({"1": { "id": "1", "name": "Item A","price": "5.99" }}) , '"No item found with id: 3"' as applicable.

[POST] /api/item -d { "name" : "Item 7", "price" : "24.99"} : Returns "Item added successfully!", "Name and price of the item to be added are required!" or "Price of your item can't be zero or negative! You don't want to sell it for free. Do you?" as applicable.

[PUT] /api/item/23 -d { "name" : "Item 7", "price" : "24.99"} : Returns "Item updated successfully!", "Name and price of the item to be updated are required!", "Price of your item can't be zero or negative! You don't want to sell it for free. Do you?" or "No item updated, possibly item not found with id: 23!" as applicable.

[DELETE] /api/item/23 : Returns "No item deleted, possibly item not found with id: 23!" or "Item deleted successfully!" as applicable.



ASSUMPTIONS
---------------
Following are the assumptions made while developing this api.

No framework was used while building this API

No separate framework was used for routing

The bakcend is written purely in PHP

The database is MySQL, so it is assumed to be on the system

The unique ids of the items are assumed to be numeric (AUTO-INCREMENT)




REFERENCES
----------------
Since this is my first php project, I referred to a lot of places. I am mentioning a few below.

PHP Documentation: http://php.net/manual/en/

Stack Overflow: http://stackoverflow.com/

Basic Login Authentication with PHP and MySQL: http://phpro.org/tutorials/Basic-Login-Authentication-with-PHP-and-MySQL.html

Building A RESTful PHP Server: Routing the Request: http://www.lornajane.net/posts/2012/building-a-restful-php-server-routing-the-request

Creating a RESTful API with PHP: http://coreymaynard.com/blog/creating-a-restful-api-with-php/

