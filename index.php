<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery.getJSON demo</title>
 
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
     
 
<script>

    $.getJSON( "https://hn.algolia.com/api/v1/search?query=bar&tags=comment", function( json,i ) {
        var arr = new Array;
        for (i = 0; i < 20; i++)     
        arr[i] = json.hits [ i ] . author;
        arr.sort();
        console.log(arr);  
 });
   
    
</script>
 
</body>
</html>

        