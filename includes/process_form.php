<?php

/**
 * @file
 * Var_dump($_SERVER["REQUEST_METHOD"]);
 */

// Check if the form was actually submitted via POST method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // 1. Retrieve the submitted data safely.
  // The keys ('username', 'lastname', 'message') must match the 'name' attributes in the HTML form.
  // The ?? '' operator is used to set a default empty string if the variable is not set (though 'required' in HTML should prevent this).
  $username = $_POST['username'] ?? '';
  $lastname = $_POST['lastname'] ?? '';
  $message = $_POST['message'] ?? '';

  // 2. Basic Validation (Essential for all form submissions!)
  if (empty($username) || empty($lastname) || empty($message)) {
    // Handle the case where a required field is missing.
    die("Error: All fields are required.");
  }

  // 3. Process the Data (This is where you would integrate with Drupal/Database/APIs)
  // For a real application (like the PIIPE Platform):
  // * **Drupal:** You would call Drupal services/APIs to create a content entity, user, or custom record.
  // * **Database:** You would prepare and execute a secure database query (using PDO or a Drupal database connection) to insert the data.
  // Example of just echoing the data back:
  echo "<h1>Form Submission Successful!</h1>";
  echo "<p>Thank you, **" . htmlspecialchars($username) . "**.</p>";
  echo "<p>Your lastname: " . htmlspecialchars($lastname) . "</p>";
  echo "<p>Your message: " . nl2br(htmlspecialchars($message)) . "</p>";

  // Optional: Redirect the user after successful processing to prevent re-submission on refresh
  // header("Location: thank_you.html");
  // exit();
  header("Locations: ../process_form.php");
}
else {
  // If someone tries to access this file directly without submitting the form.
  echo "Access Denied: Form must be submitted via POST method.";
}
