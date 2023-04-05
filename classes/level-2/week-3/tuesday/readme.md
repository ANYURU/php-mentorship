# Plan for Private routes, content restriction and logout

## Private routes

What are they?
These are the routes that are accessible for authenticated and authorized users. The routes that are accessible by everyone are public routes.

So in PHP we create a file a put in a session function. The session function will have two parts that is the session_start() and session_end() functions.

So the code that comes after the session_start() is accessible to the authenticated userslogged in users. 