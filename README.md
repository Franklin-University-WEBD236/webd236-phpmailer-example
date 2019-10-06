# WEBD 236 Lab 1 starter

Applications to send and receive money are very commonplace these days.  You can think of this application as a "Venmo" or "PayPal" type application. 
A transaction is a case where money was sent from one individual to another. Transactions have an amount, subject, message, sender, receiver, and a date the transaction took place.  
Your assignment is to write a simple "money sending" engine that lets you create as many transactions as you wish.  We will be revisiting this assignment in subsequent labs 
(i.e. to add balances, add commenting on transactions, add authentication and sessions, etc.) So, it behooves you to do a good job here.

## Helpful Hints
  - You’ll only need one database table called “transactions.”  This table should have seven columns: the ID number, amount, the date of the transaction, the subject, the message, and finally
    two for the sender and receiver. These last two can be simply a single text field (not as a related entity). We will worry about linking that up later.
  - You should use SQLite (not MySQL) for this project.
  - Make sure that your project works on any server on any directory.  In other words, you should never hard-code a URL with the name or IP address of your machine. We won’t be using your machine when we test it.  Also, you should not hard-code a directory name in your application.  It should run as [http://somename.glitch.me/index](http://somename.glitch.me/index).
  - Use the MVC framework developed in class. This will help.
  - To keep data in forms, you will need to echo out the content of variables within tags.  For example, you may have something that looks similar to this:
  
    `<input type='text' name='subject' id='subject' value='<?php echo($subject); ?>' />`

    Of course, you need to make sure that the variable `$subject` has some content in it from the last post.
    
  - Remember that every operation that writes to the database should be followed by a redirect whereas every ‘get’ (generally) should be followed by a forward (i.e. a template render). 
