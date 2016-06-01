# Developer's Best Friend
by Emerson Fang
10/22/2015

## Live URL
~~<http://p3.emersonfang.me>~~

## Description
Developer's Best Friend app contains handy tools that a software developer could use for fake data, passwords, text, etc.  It has three features:
- Lorem Ipsum
 - Generates random latin text, which can be used as filler in during the development of a project.
- Random User Generator
 - Creates 1 to 100 fake profiles with names and pictures.  The user can check off whether they want the profiles to have attributes like DOB, location, 
company, phone number, e-mail, favorite color, and favorite quote.
- xkcd Password Generator
 - Creates a password that is a sequence of 1 to 10 common words strung together.  The user can decide whether to insert hyphens between characters, 
capitalize the first letter of each word, or put a special symbol or number at the end of the password.

## Demo
http://screencast.com/t/Yd7bTYcduiF

## Details for the teaching team
No login required.

The public/assets/ directory holds the CSS files for the views, the JS for the copy function in the lorem ipsum generator, the images that I used for the 
header (a few iterations...), and the file that I used to generate the word array for the password generator.

## Outside code
* External Stylesheets
 * Maybe this is redundant?: http://yui.yahooapis.com/pure/0.6.0/pure-min.css
 * Bootstrap: http://maxcdn.bootsrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css
 * Bootstrap Theme: https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/readable/bootstrap.min.css
* Wordlist for password generator from: http://www.paulnoll.com/Books/Clear-English/
* Logic
 * Watched Susan Buck's Shipper App Video: https://www.youtube.com/watch?v=ApQOfl5sx9A
 * Condition to filtering array elements to find pictures: http://stackoverflow.com/questions/4366730/check-if-string-contains-specific-words
 * Rounded corners: http://stackoverflow.com/questions/6856711/css-rounded-corners-on-an-image-problem
 * Copying text with button: https://css-tricks.com/copy-paste-the-web/
* Styling
 * Header shadow: http://answers.squarespace.com/questions/2750/drop-shadow-on-header-menu-what-css-is-required
 * Box shadow: http://www.w3schools.com/cssref/css3_pr_box-shadow.asp
 * Button hover behavior, text styling:
  * http://stackoverflow.com/questions/3898781/changing-a-button-color-on-hover
  * http://www.ahfb2000.com/threads/2867-I-don-t-want-my-links-to-change-colors
