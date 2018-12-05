<?php require 'NewUser.php'; ?>

<h2 id="view">New User</h2>

<form action="" method="post">
    <div class="form-group">
        <label for="fname">First name</label>
        <input type="text" name="fname" id="fname" class="form-control" placeholder="John" required/>
    </div>
    
    <br>
    
    <div class="form-group">
        <label for="lname">Last name</label>
        <input type="text" name="lname"  id="lname" class="form-control" placeholder="Doe" required/>
    </div>
    
    <br>
    
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email"  id="email" class="form-control" placeholder="someone@example.com" required/>
    </div>
    
    <br>
    
    <div class="form-group">
        <label for="password">Password</label>
        <!--input type is text since the user needs to see what he typed-->
        <input type="text" name="password"  id="password" class="form-control" required/>
    </div>

    <br>
    
    <div class="form-group">
        <label for="tel">Telephone</label>
        <input type="tel" name="tel"  id="tel" class="form-control" placeholder="876-555-0123" required/>
    </div>
    
    <br>
    
    <button id="submitU">Submit</button>

</form>