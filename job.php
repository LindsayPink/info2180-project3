<?php require 'jobload.php'; ?>

<?php foreach ($jobs as $job) {
echo '<h2 id="view">'. $job['job_title'] .'</h2>

<button>Apply Now</button>

<p id="jobdetail">Posted ' .$job['date_posted'] .'</p>
<p id="jobdetail">' .$job['category'] . '</p>

<h3>'. $job['company_name'] .'</h3>
<h3>'. $job['company_location'] .'</h3>'; } ?>

<div id="delim"></div>

<h3>Job Description</h3>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non est viverra nisi accumsan porttitor. <br>
Quisque in odio aliquam, tempus mi eu, viverra sapien. <br>
Cras vehicula imperdiet nisi, eu posuere est accumsan at. <br>
Pellentesque eu ex nisl. Curabitur egestas lacinia leo sed luctus. <br>
Aliquam semper magna ut lectus venenatis cursus. <br>
Curabitur ac dapibus velit, in convallis turpis. <br>
Mauris mattis scelerisque euismod. <br>
Vivamus in feugiat eros. <br>
Morbi consectetur nec dui eu tincidunt. Nulla eu finibus felis, vel molestie nibh.</p>

<h3>Job Requirements</h3>
<ul>
    <li>Nulla facilisi.</li>
    <li>Fusce aliquet massa dolor, ut fringilla elit venenatis quis.</li>
    <li>Etiam nec porttitor nibh.</li>
    <li>Pellentesque ultrices pharetra feugiat.</li>
</ul>