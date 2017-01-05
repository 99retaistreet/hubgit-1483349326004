<?php 
$button = $_GET [ 'submit' ]; 
$search = $_GET [ 'search' ]; 
if( !$button ) 
echo "you didn't submit a keyword";
 else 
{ 
if( strlen( $search ) <= 1 ) 
echo "Search term too short"; 
else 
{ 
echo "You searched for <b> $search </b> <hr size='1' > </ br > ";
include 'db_const.php';
$search_exploded = explode ( " ", $search ); 
$x = 0; 
foreach( $search_exploded as $search_each )
 { 
$x++; 
$construct = ""; 
if( $x == 1 ) 
$construct .="keywords LIKE '%$search_each%'"; 
else 
$construct .="AND keywords LIKE '%$search_each%'"; 
} 
$construct = " SELECT * FROM RETAIL_STORE_PROD WHERE $construct and STORE_ID='1472222821' "; 
$result = db2_prepare($conn, $construct);
       db2_execute($result);
// Display search result
         if (!db2_num_rows == 0)


echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 
1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 
2. Try different words with similar meaning </br> 
3. Please check your spelling"; 
else 
{ 
echo "$foundnum results found !<p>"; 
while( $runrows = mysql_fetch_assoc( $run ) ) 
{ 
$title = $runrows ['PROD_NM']; 
$desc = $runrows ['MRP'];  
echo " <b> $title </b> </a> <br> $desc <br> <p>"; 
} 
} 
} 
} 
?>
