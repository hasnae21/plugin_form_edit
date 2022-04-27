
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
  <title>Document</title>
</head>
<body>
  












<section class="w-100 row p-4 d-flex justify-content-center pb-4">
















  <form  class="col-1"  method="post" actoin="#"  > 
    <br><br><br><br><br>
    <input style="margin-top: -15px; " type="checkbox" name="name_box" value=""> <br><br><br>
    <input style="margin-top: 0px;" type="checkbox" name="email_box" value=""> <br><br><br>
    <input style="margin-top: 0px;" type="checkbox" name="mdb-validation-subject_box" value=""> <br><br><br><br>
    <input style="margin-top: 0px;" type="checkbox" name="message_box" value=""> <br><br><br><br>
   <hr>
    <button type="submit" name="submit_box" class="btn btn-primary btn-block mb-4" style="">save</button>
  </form>
 
<?php

if(isset($_POST['submit_box'])){
        global $wpdb;
        //name input 1 
    if(isset($_POST['name_box'])){
       $wpdb->insert('wp_options', array('option_name' => 'name_box', 'option_value' => 11));  }
    else{ $wpdb->insert('wp_options', array('option_name' =>'name_box', 'option_value' => 22)); }

  //  email input 2
    if(isset($_POST['email_box'])){

             $wpdb->insert('wp_options', array('option_name' => 'email_box', 'option_value' => 11));   
   
            }
    else{

             $wpdb->insert('wp_options', array('option_name' => 'email_box', 'option_value' => 22));
 
            }

      // subject input 3 
    if(isset($_POST['mdb-validation-subject_box'])){

         
      $wpdb->insert('wp_options', array('option_name' =>'mdb-validation-subject_box', 'option_value' => 11));
    }
    else{
         $wpdb->insert('wp_options', array('option_name' =>'mdb-validation-subject_box', 'option_value' => 22));

    }

      // message input 4
    if(isset($_POST['message_box'])){
        
      
      $wpdb->insert('wp_options', array('option_name' => 'message_box', 'option_value' => 11));     
    }
    else{
        
      $wpdb->insert('wp_options', array('option_name' => 'message_box', 'option_value' => 22));   
    }

 




}
?>





































        <div id="mdb-validate-form col-1 ml-1 class="text-center needs-validation was-validated" style="width: 100%; max-width: 300px" novalidate="">
          <h2>Contact us setting</h2>
                <br><br>
          <!-- Name input -->
          <div class="form-outline mb-4">
          
            <input type="text" id="mdb-validation-name" name="name" class="form-control" required="">
            <label class="form-label" for="mdb-validation-name" style="margin-left: 0px;">Name</label>
            <div class="invalid-feedback">Please provide your name.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 41.6px;"></div><div class="form-notch-trailing"></div></div></div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="mdb-validation-email" name="email" class="form-control" required="">
            <label class="form-label" for="mdb-validation-email" style="margin-left: 0px;">Email address</label>
            <div class="invalid-feedback">Please provide your email.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

          <!-- Subject input -->
          <div class="form-outline mb-4">
            <input type="text" id="subject" name="mdb-validation-subject" class="form-control" required="">
            <label class="form-label" for="mdb-validation-subject" style="margin-left: 0px;">Subject</label>
            <div class="invalid-feedback">Please provide mail subject.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 50.4px;"></div><div class="form-notch-trailing"></div></div></div>

          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="mdb-validation-message" name="message" rows="4" required=""></textarea>
            <label class="form-label" for="mdb-validation-message" style="margin-left: 0px;">Message</label>
            <div class="invalid-feedback">Please provide a message text.</div>
          <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div></div>

          <!-- Submit button -->
         
</div>
      </section>


















<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
></script>
</body>
</html>
