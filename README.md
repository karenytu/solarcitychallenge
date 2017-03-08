The website is hosted at https://solarcitychallenge.herokuapp.com/

To connect to the database, have postgresql installed, and run the command "psql postgres://zbvkfthmvsspzz:c57aa9f724109cc6ad419575424b765a10ee05205091f8048ad24c607545b3c8@ec2-23-21-186-138.compute-1.amazonaws.com:5432/d5arjtlq5lmgqh".

To view a printout of what is in the database, go to https://solarcitychallenge.herokuapp.com/database.php

* A description of the problem and solution.
The problem was that there was a need for a service to track solar online sales, and the solution was to build a web portal to allow users to demonstrate their interest, and perhaps even make purchases.

* While all submissions are expected to be a full stack application, let us know whether your solution is more focused on back-end, front-end or full stack development (While most of our engineers work full stack in some capacity, for the purpose of the coding challenge no preference is paid towards any specific track.).
My solution is full stack development (not focused particularly on front or back end).


* Reasoning behind your technical choices. Trade-offs you might have made, anything you left out, or what you might do differently if you were to spend additional time on the project.
I used PHP and a PostgreSQL database, with the entire app being hosted on Heroku.
I had originally wanted to use MongoDB instead of PostgreSQL since it can also be used with any Heroku apps and there is a nice online interface (while
postgreSQL requires connecting to the remote database and running sql commands to see what is in it), but I ran into a lot of setup problems on my computer so I could not use MongoDB.

Things I would do differently if I had more time:
Allow the users to change their data; the site that wrote only allows users to create their profile and submit it, without making any changes afterwards.
I would also try to pay attention to security (prevent things like SQL injections).
I would also try to provide more detailed error messages, so if the user is not actually inserted into the database, an error pops up. (Right now, the only way to check if the user was actually added is either to connect to the database itself, or to check on the database.php page).
I woud also include an email field, so that users can confirm their usernames/passwords, and be able to change their passwords through email in the future.
I would want to spend more time on making the interface look nicer and be easier to use. The website is relatively simple, but there is definitely a lot of work left to be done on the style.

