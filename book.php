Using PHP and MySQL, develop a program to accept book information viz. Accession number, title, authors, edition and publisher from a web page and store the information in a database and to search for a book with the title specified by the user and to display the search results with proper headings.

<?php 
// Establishing a connection to the database
$hostname = "localhost"; 
$username = "username"; 
$password = "password"; 
$database = "sample"; 

$dbc = mysql_connect($hostname, $username, $password,$database) OR die ('Connection failed: ' . mysql_error());

mysql_select_db($database) OR die ('Could not select database');

// Creating the table
$query = "CREATE TABLE `book_info` (
  `accession_number` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` int(2) NOT NULL,
  `publisher` varchar(100) NOT NULL
)";

mysql_query($query) OR die ('Table creation failed: ' . mysql_error());

// Inserting the data
$query = "INSERT INTO `book_info` (`accession_number`, `title`, `authors`, `edition`, `publisher`)
          VALUES 
          (1, 'Book Title', 'Author Name', 1, 'Publisher Name'),
          (2, 'Book Title2', 'Author Name2', 2, 'Publisher Name2'),
          (3, 'Book Title3', 'Author Name3', 3, 'Publisher Name3')";

mysql_query($query) OR die ('Data insertion failed: ' . mysql_error());

// Searching for the book
$search_term = mysql_real_escape_string($_POST['search_term']);

$query = "SELECT * FROM `book_info` WHERE `title` LIKE '%$search_term%'";

$result = mysql_query($query) OR die ('Query failed: ' . mysql_error());

// Displaying the results
echo "<h1>Search Results</h1>";

echo "<table border='1'>";
echo "<tr><th>Accession Number</th><th>Title</th><th>Authors</th><th>Edition</th><th>Publisher</th></tr>";

while ($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>".$row['accession_number']."</td>";
  echo "<td>".$row['title']."</td>";
  echo "<td>".$row['authors']."</td>";
  echo "<td>".$row['edition']."</td>";
  echo "<td>".$row['publisher']."</td>";
  echo "</tr>";
}

echo "</table>";

// Closing the connection
mysql_close($dbc);

?>