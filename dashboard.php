<?php require 'dash.php'; ?>
<h2 id="view">Dashboard</h2>
<h3>Available Jobs</h3>

<table id="tables">
    <thead>
        <tr>
            <th>Company</th>
            <th>Job Title</th>
            <th>Category</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        
<?php

foreach ($jobs as $job) {
  echo '<tr><td>' . $job['company_name'] . '</td>
        <td>' . $job['job_title'] . '</td>
        <td>' . $job['category'] . '</td>
        <td>' . $job['date_posted'] . '</td></tr>';
} ?>

</tbody></table>

<h3>Jobs Applied For</h3>

<table id="tables">
    <thead>
        <tr>
            <th>Company</th>
            <th>Job Title</th>
            <th>Category</th>
            <th>Date Applied</th>
        </tr>
    </thead>
    <tbody>
        <tr>
<?php    
foreach ($jobsAppliedFor as $jobsA) {
  echo '<td>' . $jobsA['company_name'] . '</td>
        <td>' . $jobsA['job_title'] . '</td>
        <td>' . $jobsA['category'] . '</td>
        <td>' . $jobsA['date_posted'] . '</td>';
} ?>
</tr></tbody></table>