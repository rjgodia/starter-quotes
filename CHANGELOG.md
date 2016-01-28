# Changelog
### v.1 (2016-27-1)
* Initial Fork
* Created Changelog
* Updated Readme.md

### v.1.1 (2016-27-1)
* Created a First.php Controller
* Fixed the first link

### v.1.2 (2016-27-1)
* Updated the First.php Controller with a "zzz" method for link 3
* Added a route to routes.php to map "sleep" to "first/zzz"
* Fixed the third (sleep) link

### v.1.3 (2016-27-1)
* Updated the First.php Controller with a "gimme" method to show links by their id
* Added a route to routes.php to map "show/(:num)" to "first/gimme/$1"
* Fixed the fifth (show/3) link

### v.1.4 (2016-27-1)
* Created a Last.php Controller
* Fixed the second (last) link

### v.1.5 (2016-27-1)
* Created a Bingo.php Controller
* Added a regular expression route to routes.php to map "[a-zA-Z]{4}/bingo" to "bingo"
* Fixed the seventh (wise/bingo) link

### v.1.6 (2016-27-1)
* Added the "lock/*/*" route to routes.php to route to welcome/shucks
* Added the shucks function to the Welcome.php controller

## v.1.7 (2016-27-1
* Added the "dunno" route in routes.php