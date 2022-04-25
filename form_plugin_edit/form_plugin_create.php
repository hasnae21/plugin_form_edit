<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
/**
 * Plugin Name:       Create_Form
 * Description:       Creating a form with shortcode for it 
 * Version:           1.0.4
 * Author:            Hasnae Ahouzi
 */


function form_plugin(){
    $form = '';
    $form .= '<form action="#" method="POST"> ';


    global $wpdb;
    $posts=$wpdb->get_results("SELECT * FROM wp_option  WHERE option_value LIKE true");
      echo $posts; 

    if($fname == true){
    $form .= '<label for="first_name">Prénom: </label>';
    $form .= '<input type="text" id="first_name" class="form-control" name="first_name" placeholder="Entrer votre prénom svp" required/> <br> ';
    }

    if($lname == true){
    $form .= '<label for="last_name">Nom: </label>';
    $form .= '<input type="text" id="last_name" class="form-control" name="last_name" placeholder="Entrer votre nom svp" required/><br> ';
    }

    if($email == true){
    $form .= '<label for="email">Email: </label>';
    $form .= '<input type="email" id="email" class="form-control" name="email" placeholder="Entrer votre email svp" required/><br> ';
    }

    if($phone == true){
    $form .= '<label for="phone">Telephone: </label>';
    $form .= '<input type="number" id="phone" pattern="[0-9]{10}" class="form-control" name="phone" placeholder="Entrer votre numero de telephone svp" required/><br> ';
    }

    if($message == true){
    $form .= '<label for="message">Message ou Questions: </label> ';
    $form .= '<textarea name="message" id="message" class="form-control" placeholder="Entrer vos questions ou vos message" required></textarea>';
    }


    $form .= '<input type="submit" class="btn btn-info" name="form_submit" value="Envoyer"/> ';
    $form .= '</form>';
    
    // if (isset($_POST['form_submit'])) {
    //     $Fname = $_POST['first_name'];
    //     $Lname = $_POST['last_name'];
    //     $Email = $_POST['email'];
    //     $Phone = $_POST['phone'];
    //     $Message = $_POST['message'];
        
    //     //table name: 'wp_plugin_form'
    //     $wpdb->insert('wp_plugin_form', array('firstName' => $Fname, 'lastName' => $Lname, 'email' => $Email, 'phone' => $Phone, 'message' => $Message));
    // }

    return $form;
}
//form shortcode [form_shortcode]
add_shortcode('form_shortcode', 'form_plugin');


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