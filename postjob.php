<?php require_once "sendjob.php"; ?>

<h2 id="view">New Job</h2>

<form action="" method="POST" id="newjob">
    <div class="form-group">
        <label for="jtitle">Job Title</label>
        <input type="text" name="jtitle" id="jtitle" class="form-control" placeholder="e.g. Senior Designer or Product Manager" required/>
    </div>
    
    <br>
    
    <div class="form-group">
        <label for="jdescrip">Job Description</label>
        <textarea form="newjob" name="jdescrip" id="jdescrip" class="form-control" rows="5" placeholder="Tell potential employees what this job is about."required></textarea>
    </div>
    
    <br>
    
    <div class="form-group">
        <label for="cat">Category</label>
        <select form="newjob" name="cat" id="cat" required>
            <option value="Sales & Marketing">Sales & Marketing</option>
            <option value="Design">Design</option>
            <option value="Programming">Programming</option>
            <option value="Business & Management">Business & Management</option>
            <option value="Customer Support">Customer Support</option>
            <option value="DevOps & Sysadmin">DevOps & Sysadmin</option>
         </select>

    </div>
    
    <br>
    
    <div class="form-group">
        <label for="comp">Company</label>
        <input type="text" name="comp"  id="comp" class="form-control" required/>
    </div>
    
    <br>
    
    <div class="form-group">
        <label for="jloc">Job Location</label>
        <input type="text" name="jloc"  id="jloc" class="form-control" placeholder="e.g. Kingston, Jamaica" required/>
    </div>
    
    <br>
    <button id="submitJ">Submit</button>

</form>