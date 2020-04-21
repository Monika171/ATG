<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About ATGProject

## Installation

1. cd xampp/htdocs
2. composer create-project laravel/laravel project-name
3. cd project-name
4. Configure1(figure out for MAC)- Go to-  "C:\xampp\apache\conf\extra\httpd-vhosts.conf" and add:
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/project-name/public"
    ServerName project-name.localhost
</VirtualHost>

5. Configure2(figure out for MAC)- Go to-  "C:\Windows\System32\drivers\etc\hosts"
(OPEN AS ADMIN and add:)
127.0.0.1 localhost
127.0.0.1 project-name.localhost

6. If u want to try anything: Goto routes>web.php and add this
example1 (may be run as "project-name.localhost/about" in browser):

Route::get('/about', function(){
return view('pages.about');
});

5. to create controller and model ......FIGURE OUT! bored of writing bye!

## Status

1. A basic web app (Laravel)
● Controller file name: ATGController.php (well actually that's a wrong way. Proper way is to give plural name is model. But this was just an experiment)
● One user form, three fields - name, email, pincode and ofcourse 'SUBMIT' button.
● Present scene: Anyone can enter data. No 'auth'.(Bad practice but as I said experiment app!)
● Backend: Email validation and pincode (6 digits exact) validation
● "There should NOT be any duplicate data. So, in case I am entering the same data twice, I should get a flash message or some notification that the data already exists in the DB"----- (hmm still trying to look for a simple and efficient way)
● On successful entering the data, there should be a notification too.

2. When user successfully enters new/different data, user registered should get an email (we can just put a LOG statement that ‘EMAIL SENT’. But what) if I actually send an email (using mailtrap), then how do I record in LOG file? Event Listeners?)
Also, If the email sending fails, we should be able to LOG that error as well.

3. Create a Restful API in a new controller file (WebServicesController.php) for the previous tasks. A human readable API request and response with status:0|1 and message as two mandatory response keys.

4. Previous Eloquent and email logic should be moved to a common ‘PHP trait’ file. At end of this task, there should be NO duplicate statement inside class in both the controllers.( how should I move the logic into the trait file and reuse that
trait function in both controllers?)

-------------------------------
*So In the end:*

1. We have a laravel log file (Should be empty or not there initially).
2. Call the API (using postman). Log statement should be recorded with ‘EMAIL SENT’
3. Call the API again (with same parameters). Log statement should NOT be recorded.
4. Insert same parameters in the web form. Log statement should NOT be seen and only the ERROR message should be seen.
5. Insert new parameters in the web form. Log statement should be seen and the SUCCESS message should be seen.


