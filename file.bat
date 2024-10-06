@echo off
setlocal

set folders=(
    "assets\css"
    "assets\images"
    "assets\js"
    "controllers"
    "pages\home"
    "pages\events"
    "pages\register"
    "pages\about"
    "portal\admin\login"
    "portal\member\login"
)

for %%f in %folders% do (
    mkdir %%~f
)

echo /* CSS styles */ > assets\css\style.css
echo /* JavaScript functions */ > assets\js\script.js
echo <?php // Database connection file ?> > controllers\conn.php
echo <?php // Include files ?> > controllers\includes.php
echo <?php // Home page ?> > pages\home\index.php
echo <?php // Events page ?> > pages\events\index.php
echo <?php // Registration page ?> > pages\register\index.php
echo <?php // About page ?> > pages\about\index.php
echo <?php // Main index page ?> > pages\index.php
echo <?php // Admin login page ?> > portal\admin\login\index.php
echo <?php // Admin portal ?> > portal\admin\index.php
echo <?php // Member login page ?> > portal\member\login\index.php
echo <?php // Member portal ?> > portal\member\index.php
echo <?php // Portal index page ?> > portal\index.php

echo Files and directories created successfully.
pause
