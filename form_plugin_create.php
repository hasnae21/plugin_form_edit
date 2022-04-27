    <?php
    /**
     * Plugin Name:       Create_Form
     * Description:       Creating a form that will be saved in database and make a usefull shortcode for it 
     * Version:           2.5
     * Author:            Hasnae Ahouzi
     */
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
  rel="stylesheet"
/>
    
    <title>Form</title>
</head>
<body>

<section class="w-100 p-4 d-flex justify-content-center pb-4">

<?php
function form_plugin(){
?>

<form id="mdb-validate-form" class="text-center needs-validation was-validated" style="width: 100%; max-width: 300px" novalidate="" method="post" action="">
<h2>Contact us</h2><br>

          <!-- Name input -->
          <?php 
          if(get_option("name_box")==11){
            $name = $_POST['name'];
            
          ?>
          <div class="form-outline mb-4">

            <input type="text" id="mdb-validation-name" name="name" placeholder="Entre your nom here" class="form-control" required>

            <label class="form-label" for="mdb-validation-name" style="margin-left: 0px;">Name</label>
            <div class="invalid-feedback">Please provide your name.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 41.6px;"></div><div class="form-notch-trailing"></div></div></div>
          <?php 
          }
          ?>
          <br>

          <!-- Email input -->
          <?php 
          if(get_option("email_box")==11){
            $email = $_POST['email'];
          ?>
          <div class="form-outline mb-4">
            <input type="email" id="mdb-validation-email" name="email" placeholder="Entre your email here" class="form-control" required>

            <label class="form-label" for="mdb-validation-email" style="margin-left: 0px;">Email address</label>
            <div class="invalid-feedback">Please provide your email.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>
          <?php 
          }
          ?>
          <br>

          <!-- Subject input -->
          <?php 
          if(get_option("subject_box")==11){
            $subject = $_POST['subject'];
          ?>
          <div class="form-outline mb-4">

            <input type="text" id="mdb-validation-subject" name="subject"  placeholder="Entre the subject here" class="form-control" required>

            <label class="form-label" for="mdb-validation-subject" style="margin-left: 0px;">Subject</label>
            <div class="invalid-feedback">Please provide mail subject.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 50.4px;"></div><div class="form-notch-trailing"></div></div></div>
          <?php 
          }
          ?>
          <br>

          <!-- Message input -->
          <?php 
          if(get_option("message_box")==11){
            $message = $_POST['message'];
          ?>
          <div class="form-outline mb-4">

            <textarea class="form-control" id="mdb-validation-message" name="message" rows="4" required placeholder="Entre your questions or messages" ></textarea>

            <label class="form-label" for="mdb-validation-message" style="margin-left: 0px;">Message</label>
            <div class="invalid-feedback">Please provide a message text.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div></div>
          <?php 
          }
          ?>
          <br>

          <!-- Submit button -->
          <input type="submit" class="btn btn-dark btn-block mb-4" name="submit" value="submit"/>

</form>
<br><br>


<?php

if (isset($_POST['submit'])) {

  //table name: 'wp_plugin_form'  
  global $wpdb;
  $wpdb->insert('wp_plugin_form', TAB array[]]);
}
?>

<?php

}
//form shortcode [form_shortcode]
add_shortcode('form_shortcode', 'form_plugin');
?>


</section>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
></script>
</body>
</html>


<?php
function wporg_options_page() {
    add_menu_page(
        'Contact_form',
        'Contact_form Options',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php',
        null,
        'dashicons-forms',
        100
    );
}
//admin settings options
add_action( 'admin_menu', 'wporg_options_page' );
?>
