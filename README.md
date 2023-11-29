#E-mail Sending Form

This is a simple project I created using PHP and CSS. The purpose of this project is to demonstrate the skills I've acquired in filtering user input via "Regular Expressions".<br>
<br>
The form consists of four different textboxes for Name, Email, URL, and Comments, each with its unique filtering.<br>
<br>
After the user enters some input, it is displayed at the top of the page only if the required field is not empty and is correct. If any of the presented fields are empty or contain forbidden characters, an error will be displayed.<br>
Following fillration by "Regular Expressions" is used
<pre>
Name: /^[A-Za-z. ]*$/
Email : /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/
Website:  /(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/
</pre>
<br>
Here are the steps to deploy this project:
<pre>
1. Install XAMPP version 3.3.0.
2. During installation, select only the necessary modules, with the exception of PHP, choose mySQL as the additional module.
3. Clone this project to the "C:\xampp\htdocs\website" folder.
4. Launch XAMPP and in the "Actions" section, click on "START" for the APACHE module.
5. Open your browser and navigate to "localhost/website."
6. The index page should appear.
7. Try to insert data to textboxes.
</pre>

The only remaining task is to connect the form to the server.<br>
