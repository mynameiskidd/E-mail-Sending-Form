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
The only remaining task is to connect the form to the server.<br>
