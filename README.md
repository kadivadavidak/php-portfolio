# php-portfolio
A portfolio site built using OOP in PHP

* To demonstrate form usage, I have a contact form (found on the contact page. It will send an email if a SMTP server is setup).
* To demostrate interaction with a database, I am storing credentials in a mysql database, and retrieving them to authenticate administrators in my admin portal (found in the footer). Username and password are: david:dog123. Passwords are hashed for "security".
* To demonstrate cookie usage, cookies are created and accessed to display the last time the website was accessed (found in the footer).
* To demonstrate session usage, a new session variable is created when an admin is authenticated, and is active until they sign out (found in the footer, and in the header once signed in)
* For styling, I am using Bootstrap.
