<?php include "partials/header.php" ?>
<body>

<?php include 'partials/navbar.php' ?>

  <div class="main-container">
    <h3>What is React JS?</h3>
    <p>Author: ThePaulin</p>
    <div class="featured-article" >
      <img src="https://community-cdn-digitalocean-com.global.ssl.fastly.net/iCfQnsFQzuzB7S8bLbxECrVk" />
      <p>React (also known as React.js or ReactJS) is a free and open-source front-end JavaScript library[3] for building user interfaces based on UI components. It is maintained by Meta (formerly Facebook) and a community of individual developers and companies.[4][5][6] React can be used as a base in the development of single-page, mobile, or server-rendered applications with frameworks like Next.js. However, React is only concerned with state management and rendering that state to the DOM, so creating React applications usually requires the use of additional libraries for routing, as well as certain client-side functionality</p>
    </div>
    <div class="articles-container">
      
      <!-- <?php
      foreach (glob("partials/articles/*.php") as $filename){
        include $filename;
      }
      ?> -->

      <?php
      $hostName = "localhost";
      $userName = "ThePaulin";
      // $password = "ThePaulin";
      $password = "DeepPockets";
      $databaseName = "blog_posts";
        $conn = new mysqli($hostName, $userName, $password, $databaseName);
      //check connection
      if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }else {
        // echo "database connection was successful";
      }

      // mysqli_select_db($conn, "articles");
      $sql = "SELECT articles.*, users.firstName, users.lastName FROM articles AS articles INNER JOIN users AS users ON (articles.userID = users.userID)";
      
      $res = $conn->query($sql);

      // $userQuery = "SELECT firstName, lastName FROM users WHERE userID"



      if ($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
          echo "<div class='article'><div><h1>TITLE: ".$row["title"]."</h1></div><div><p> Date: ".$row["date"]."</p><span> Author: ".$row["firstName"]." ".$row["lastName"]."</span></div><img class='article-img' src='".$row["imgURL"]."'/> </div>"; 
          echo "<br> <p>".$row["content"]."</p><br><hr>"; 
        }
      }else{
        echo "0 results";
      }

    
      ?>
      <div>
       

        
      </div>
    </div>

    </div>
    </div>

  <?php include 'partials/footer.php' ?>
  
</body>
</html>