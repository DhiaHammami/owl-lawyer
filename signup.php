<?php include('Insert.php') ?>
<html>
<header>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</header>
<body>
<div class="user">
    <header class="user__header">
       
        <h1 class="user__title"> sign-up</h1>
    </header>
    
    <form class="form"  method="post" action="signup.php">
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" name="username" />
        </div>
        
       
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" name="password" />
        </div>
         <div class="form__group">
            <input type="Text" placeholder="Etudiant" class="form__input" disabled />
        </div>
        
        <div class="container-login100-form-btn">
                  <div class="wrap-login100-form-btn">
                     <div class="login100-form-bgbtn"></div>
                      <button class="login100-form-btn" type="Submit" name="reg_user" >Register</button></div></div>
    </form>
</div>
<script type="text/javascript">
  const button = document.querySelector('.btn')
const form   = document.querySelector('.form')

button.addEventListener('click', function() {
   form.classList.add('form--no') 
});
</script>
</body>
</html>