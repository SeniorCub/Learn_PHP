<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
          form{
               padding: 2rem;
               box-shadow: 5px 5px 10px #eee, -5px -5px 10px #eee;
               display: flex;
               flex-direction: column;
               gap: 2rem;
               margin: 0 auto;
               width: 40%;
               input{
                    height: 30px;
               }
               .btn{
                    background: black;
                    width: 25%;
                    color: white;
                    margin: 0 auto;
                    height: 40px;
                    border: none;
                    border-radius: 5px;
               }
               div{
                    margin: 0 auto;
                    font-size: 2.5rem;
                    font-weight: 600;
                    letter-spacing: 5px;
                    font: optional;
               }
          }
     </style>
</head>
<body>

     <form action="storage.php" method="POST" style="display: none;">
          <input type="email" name="email" id="">
          <input type="password" name="password" id="">
          <button type="submit" class="btn">Submit</button>
     </form>

     <!-- CReate a contact form and submit in another file -->
      <form action="storage.php" method="post">
          <div>Contact</div>
          <input type="text" name="name" id="" required placeholder="Name">
          <input type="email" name="email" id="" required placeholder="Email">
          <input type="text" name="subject" id="" required placeholder="Subject">
          <textarea name="message" id="" cols="30" rows="10" required placeholder="Message"></textarea>
          <button type="submit" class="btn">Submit</button>
      </form>
</body>
</html>