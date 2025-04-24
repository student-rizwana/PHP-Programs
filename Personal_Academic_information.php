<!DOCTYPE html>
<html>

<head>
  <title>eKoma To Ultimax Technology - String Task</title>
</head>

<body>

  <h3>Variable Output</h3>
  <?php
  // Variables section
  $collageName = "AIISM";
  $rollNo = "65";
  $branchName = "BCA";

  echo "<p><b>Collage Name:</b> " . strtoupper($collageName) . "</p>";
  echo "<p><b>Roll No:</b> " . ucwords($rollNo) . "</p>";
  echo "<p><b>Branch Name:</b> " . str_replace("Tech", "", $branchName) . "</p>";
  ?>

  <h3>Constant Output</h3>
  <?php
  // Constants section
  define("PHONE_NO", "+1 (555) 123-4567");
  define("DEPARTMENT", "Web Development");

  echo "<p><b>Phone Number:</b> " . PHONE_NO . "</p>";
  echo "<p><b>Department:</b> " . strtolower(DEPARTMENT) . "</p>";
  ?>

</body>

</html>