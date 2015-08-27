<?php
//passes info from Feedback.html to db
        include_once('pizzadb.php');
        $email = $_POST['email'];
		$comment = $_POST['comment'];
        $rate = $_POST['rate'];
        if(mysql_query("INSERT INTO user VALUES('$email', '$comment', '$rate')"))
         echo "Successfully Inserted";
        else
        echo "Insertion Failed";
?>