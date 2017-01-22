# GeoReminder

Set up reminders tied to different geo-locations

## Background

There are many task management and reminder applications that are aggregated and sorted according to time.

GeoReminder allows users to associated these reminders to physical locations. Users are able to
set reminders for themselves or friends, so they are prompted when they enter or leave
certain locations. For example, you can set up a GeoPrompt to notify yourself to do laundry when
you return home.

## Run Instructions

Make sure Node.js and Python are installed.

Start a local Parse Server:

<code> parse-server --appId APPLICATION_ID --masterKey MASTER_KEY --databaseURI mongodb://localhost/test </code>

Start the Parse Dashboard:

<code>parse-dashboard --appId APPLICATION_ID --masterKey MASTER_KEY --serverURL "http://localhost:1337/parse" --appName GeoReminder </code>

Start a Simple Server to host a GeoReminder instance:

<code>python -m http.server 8000 </code>

Open a GeoReminder instance in here: http://0.0.0.0:8000/index2.html
 
## Dependencies/Frameworks/Technologies/Other Tools

* Parse Server (parse-1.6.14): https://parse.com/
* jQuery (jquery/3.1.1 & jquery/1.11.1): https://jquery.com/
* UbiLab's Geocomplete: https://ubilabs.github.io/geocomplete/
* Registration Form: https://github.com/nadeem2259/bootstrap-registration-form

## Other Resources

https://github.com/ParsePlatform/parse-server

## Heroku App Deployment (Incomplete)
 
Everything can be done in the shell/terminal:

<pre>
$ mkdir my-parse-dashboard

$ my-parse-dashboard

$ git init

$ npm init

$ npm install --save parse-dashboard
</pre>

Then run:

<pre>
$ heroku login 

$ heroku create

$ git push heroku master

$ heroku ps:scale web=1

$ heroku open
</pre>

For more detail:

https://www.codementor.io/mattgoldspink/deploy-parse-dashboard-on-heroku-du1083egs

## Other installation instructions

The steps to run the script are as follows :

1. Unzip the file in your local server or live server folder.

  * If you are using wamp as a local server then unzip the code at C:\wamp\www.
  * If you are using the live server then unzip the code at /var/www.

2. Import Database : 

You may find a database file naming registration.sql, which is present inside the file given. If you 
are using wamp local server then go to http://localhost/phpmyadmin/, then to ‘import‘ option provided 
in the tool bar and import the file. 

After that you are set to use the script. Follow the below given link to run the file.

 <code> http://localhost/phpmyadmin/registration_jquery/registration.html </code>
 
