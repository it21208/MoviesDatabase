Το link προς το server για δοκιμή είναι:

http://galaxy.hua.gr/~it21208/Assignment2/moviesclient.html

Ο προτεινόμενος browser είναι ο Mozilla Firefox.

Σας στέλνω τα εξής αρχεία:

1) Export αρχεία από τη local ΒΔ MySQL που έχω στον Η/Υ μου
	moviesphp_genre0.sql
	moviesphp_movie0.sql
   Από αυτά μπορεί να γίνει import και να δημιουργηθεί μια νέα ΒΔ. 
2) Επειδή στον 62.217.125.30 έπρεπε υποχρεωτικά να χρησιμοποιήσω τη ΒΔ "it21208" 
   τροποποίησα τα αρχεία έτσι ώστε μόνο να δημιουργούν τους πίνακες, με τους
   περιορισμούς και τα δεδομένα τους. Τα νέα αρχεία είναι:
	moviesphp_genre.sql
	moviesphp_movie.sql
3) HTML σελίδα για την εφαρμογή και εικόνα
	moviesclient.html
	interior.jpg
4) PHP σελίδες για τον WEB Server
	addmovie.php
	genrelist.php
	getmovie.php
	moviehintsearch.php
	movieslist.php
	updatemovie.php



ΠΑΡΑΤΗΡΗΣΗ 1: Δοκιμές στο τοπικό σύστημα (Client-Apache2-MySQL)
---------------------------------------------------------------
  Η εφαρμογή αναπτύχθηκε και δοκιμάστηκε στον Η/Υ μου όπου εγκατέστησα το XAMPP για Windows.
  Στον τοπικό MySQL (localhost) έφτιαξα μια ΒΔ (moviesphp) με 2 πίνακες (movie, genre). Υπάρχουν
  capture screens που δείχνουν τη λειτουργικότητα. Το connection string που χρησιμοποίησα τοπικά
  με επιτυχία είναι:

  $con = mysql_connect("localhost","root","changeit") or die( "Could not connect to DB: " . mysql_error() );

ΠΑΡΑΤΗΡΗΣΗ 2: Δοκιμές στο σύστημα του πανεπιστημίου
---------------------------------------------------
 
  Έκανα upload τις σελίδες PHP, τη σελίδα HTML και την εικόνα στο /home/HUA/it21208/public_html/Assignment2

