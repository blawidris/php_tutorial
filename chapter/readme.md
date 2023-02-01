# Introduction to PHP

PHP (Hypertext Preprocessor) is a general-purpose and server-side scripting language commonly use for web development. It can be embedded into HTML, and it be used to create dynamic web pages that can interact with databases. PHP is a popular choice for creating content management systems (CMS), forums, and e-commerce websites

### Why use PHP

- Open-source: it is free to use and distributed. This makes it accessible to a wide range of users and developers.

- Cross-Platform: PHP can run on a variety of platforms, including Windows, Linux, and Mac OS X, which makes it a versatile choice for web development.

- Databases Integration: PHP can easily interact with databases, such as MySQL, making it a great choice for building dynamic, data-driven web applications.

- Community Support: PHP has an large and active online community for users and developer that helps you whenever you face an issue.

- Large number of Frameworks: PHP has a large and active community of users and developers, which means there is a wealth of resources and support available, including tutorials, documentation, and forums.

- Compatibility: PHP can be easily integrated with other languages and technologies, such as HTML, CSS, and JavaScript, making it a great choice for creating dynamic web pages and web applications.

- Cost-effective: PHP is a cost-effective solution for web development. It eliminates the need to purchase expensive proprietary software.

- Security: PHP provides several built-in functions and libraries to secure web applications from common security threats, such as SQL injection and cross-site scripting (XSS) attacks.

- Scalability: PHP is a highly scalable language, which means it can handle a large number of users and a high volume of traffic without any problems.

### How PHP works

![How PHP works](https://www.phptutorial.net/wp-content/uploads/2021/03/What-is-PHP-How-PHP-works.png)

- A user requests a web page by entering a URL into their web browser.

- he request is sent to the server where the web page is located.

- The server checks to see if the web page contains any PHP code.

- If the web page contains PHP code, the server processes the code and generates the HTML or other output that will be sent to the client's browser.

- The server then sends the generated output to the client's browser, which displays the web page to the user.

## Installing PHP

Basically, PHP can be installed on pc in several ways depending on the OS your pc is running and the web server you are using.

General overview of the process:

- Download the latest version of PHP from the official website (https://windows.php.net/download/).

- Install a web server such as Apache or Nginx.

- Configure your web server to work with PHP.

- Test your PHP installation by creating a simple PHP script, such as a "Hello World" program, and running it through your web server.

- Install any necessary PHP extensions and configure any other necessary settings in your php.ini configuration file.

Additionally, you can use a package manager like apt-get or yum to install PHP on Linux, or use a package like XAMPP, WAMP, or LAMP to install Apache, PHP, and MySQL all at once.

### Install XAMPP on Windows

- Download the latest version of XAMPP from the official website (https://www.apachefriends.org/index.html).

- Double-click the downloaded file to start setting up XAMPP

- Select the components that you want to install.
  In this step, you can select Apache, and MySQL, deselect other components like the following, and click the Next button to go to the next step.

- Specifying the installation folder; It’s recommended to install XAMPP in the c:\xampp folder

- Select a language for XAMPP Control Panel. By default, it’s English and click the Next button to go to the next step.

- Click the Next button to go to the next step.

- Then click the Next button to start installation.


## PHP Syntax

- Php file file extension ends with **.php**

- Php line of code start with **<?php** and ends with **?>**

- Any statement that comes inside 2 will be executed as PHP and must be close with semi-colon (;)

    - statement is a code that does something

- PHP variable start with dollar ($) sign _e.g: $name = "Idris"_

- PHP is case-sensitive with the following:

- variable name
- class name

While it is not with;

- User-defined function
- PHP constructs such as if, if-else, if-elseif, switch, while, do-while, etc.
- PHP keywords such as true or false

Whitespace and line-breaks doesn't matter but do make use of it when formatting your code
