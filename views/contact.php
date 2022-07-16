<?php include "partials/header.php" ?>
<body>
    <?php include "partials/navbar.php" ?>
    <div>
        <h1>Contact Me</h1>
    </div>
    <form class="form" action="contact.php" method="post">
        Name: <input type="text" name="name" ><br>
        E-mail: <input type="text" name="email" ><br>
        Message: <br> <textarea name="message" cols="50px" rows="10px"></textarea><br>
        <input type="submit"> 
    </form>
    
</body>
</html>