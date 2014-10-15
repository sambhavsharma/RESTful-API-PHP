<!DOCTYPE html>
<!--if lt IE 8html.no-js.lt-ie8
-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <!-- if IEmeta(http-equiv='X-UA-Compatible', content='IE=edge,chrome=1')
    -->
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- if lt IE 9
    script(src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")
    script(src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")
    
    -->
    <!-- stylesheets-->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet">
    <link href="styles/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <header class="header navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#" class="navbar-brand">REST API</a>
          </div>
          <div id="navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#home">Introduction</a></li>
              <li><a href="#setup">Setup</a></li>
              <li><a href="#routes">Routes</a></li>
              <li><a href="#sample">Sample</a></li>
              <li><a href="#assumptions">Assumptions</a></li>
              <li><a href="#references">References</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="main-content">
      <div class="banner">
        <div class="container" style="padding-bottom:40px;">
          <h2>RESTful API for an Online Store.</h2>
          <p style="font-size:16px;">This is a very simple and basic REST api for an online store. This provides basic authentication and REST api's for CRUD operations on store items.</p>
          <p style="font-size:16px;">The API is written in PHP with MySQL as the datastore.</p>
          <p style="font-size:16px;">P.S. I am Sambhav Sharma, a software developer with backend development as my core expertise.</p>
          <p style="font-size:16px;">I had this theme with me, and since I was anyways writing the readme for the API and had nothing on the index page, I thought it would be cool to put the documentation up here too.</p>
          <p style="font-size:16px;">Also this is my first php project. I must have made a lot of beginner mistakes, sorry about that.</p>

        </div>
      </div>
      <div id="setup" class="features">
        <header>
          <h3 class="text-center">Steps for Setting it up </h3>
        </header>
        <div class="container">
          <div class="row">
            <div class="feature-item col-md-12">
              <h3>Server</h3>
              <div>
                <p>I used apache while development. But this should work on any server with supports .htaccess file configuration, since I use it for routing.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="feature-item col-md-12 ">
              <h3>Database</h3>
              <div>
                <p>The code assumes MySQL as server.</p>
                <p>I have written scripts to automate the database setup.</p>
                <p>Change the credentials in db_operations/connect.php file. 
                Once that is done, execute db_operations/setup_database.php file.</p>
                <p> The setup_database.php file will create a database named 'sambhav'
                and then create a user table and an item table. It will add a default user
                with username 'admin' and password 'password'. It will also add two dummy items.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="routes" class="features">
        <header>
          <h3 class="text-center">Routes</h3>
          <h4 class="text-center">Following are the routes defined for the api and their description</h4>
        </header>
        <div class="container">
          <div class="row">
            <div class="feature-item col-md-12">
              <h3>User</h3>
              <div>
                <p>/api/user/login [POST]: Login for the api. The routes for items can not be accessed until a user has loggedin. It requires two $_POST params, viz. 'username' and 'password'</p>
                <p>/api/user/logout [GET]: Logout from the session</p>
                <p>/api/user [GET]: Returns the details of the user if logged in.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="feature-item col-md-12 ">
              <h3>Item</h3>
              <div>
                <p>/api/item/{id} [GET]: Returns the details for the item with given id.</p>
                <p>/api/item [GET]: Returns the list of all items.</p>
                <p>/api/item [POST]: Adds a new item in the database. It requires two $_POST params, viz. 'name' and 'price'.</p>
                <p>/api/item/{id} [PUT]: Updates the item with the given id.</p>
                <p>/api/item/{id} [DELETE]: Removes the item from the database</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="sample" class="features">
        <header>
          <h3 class="text-center">Sample Requests</h3>
          <h4 class="text-center">Following are the routes defined for the api and their description</h4>
        </header>
        <div class="container">
          <div class="row">
            <div class="feature-item col-md-12">
              <h3>Important User and Item request samples!</h3>
              <div>
                <p>[POST] /api/user/login -d '{"username":"admin", "password":"password"}' : 
                It accepts JSON as well as form data. Returns 'Successful login!', 'Username or Password not provided!' and 'Invalid Credentials!' as applicable</p>

                <p>[GET] /api/item/5  : Returns item details ({"1": { "id": "1",
                "name": "Item A","price": "5.99" }}) , '"No item found with id: 3"' as applicable.</p>

                <p>[POST] /api/item -d { "name" : "Item 7", "price" : "24.99"} : Returns "Item added successfully!", "Name and price of the item to be added are required!" or "Price of your item can't be zero or negative! You don't want to sell it for free. Do you?" as applicable.</p>

                <p>[PUT] /api/item/23 -d { "name" : "Item 7", "price" : "24.99"} : Returns "Item updated successfully!", "Name and price of the item to be updated are required!", "Price of your item can't be zero or negative! You don't want to sell it for free. Do you?" or "No item updated, possibly item not found with id: 23!" as applicable.</p>

                <p>[DELETE] /api/item/23  : Returns "No item deleted, possibly item not found with id: 23!" or "Item deleted successfully!" as applicable.</p>

                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="assumptions" class="features">
        <header>
          <h3 class="text-center">Assumptions</h3>
          <h4 class="text-center">Following are the assumptions made while developing this api.</h4>
        </header>
        <div class="container">
          <div class="row">
            <div class="feature-item col-md-12">
              <div>
                <p> No framework was used while building this API</p>
                <p> No separate framework was used for routing</p>
                <p> The bakcend is written purely in PHP</p>
                <p> The database is MySQL, so it is assumed to be on the system</p>
                <p> The unique ids of the items are assumed to be numeric (AUTO-INCREMENT)</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="references" class="features">
        <header>
          <h3 class="text-center">References</h3>
          <h4 class="text-center">Since this is my first php project, I referred to a lot of places. I am mentioning a few below.</h4>
        </header>
        <div class="container">
          <div class="row">
            <div class="feature-item col-md-12">
              <div>
                <p> <a href="http://php.net/manual/en/" target="_blank">PHP Documentation</a></p>
                <p> <a href="http://stackoverflow.com/" target="_blank">Stack Overflow</a></p>
                <p> <a href="http://phpro.org/tutorials/Basic-Login-Authentication-with-PHP-and-MySQL.html" target="_blank">
                  Basic Login Authentication with PHP and MySQL
                </a></p>
                <p> <a href="http://www.lornajane.net/posts/2012/building-a-restful-php-server-routing-the-request" target="_blank">
                Building A RESTful PHP Server: Routing the Request</a></p>
                <p> <a href="http://coreymaynard.com/blog/creating-a-restful-api-with-php/" target="_blank">
                  Creating a RESTful API with PHP
                </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <footer class="footer text-center">© Copyright 2014 Sambhav Sharma</footer>
    <!--if lt IE 8
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    
    
    
    -->
    <!-- Scripts-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="scripts/jquery.min.js"><\/script>')</script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.smooth-scroll.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>