<?php
/**
 * Plugin Name:       Create_Form
 * Description:       Creating a form that will be saved in database and make a usefull shortcode for it 
 * Version:           1.0
 * Author:            Hasnae Ahouzi
 */


//$path = preg_replace('/wp-content.*$/','',__DIR__);
//include ($path.'/wp-load.php');

function form_plugin()
{
    $form = ' ';
    $form .= '<h2> Contacter-nous !</h2> ';
    if (isset($_POST['form_submit'])) {
        global $wpdb;
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        //database name: 'wordpress'
        //table name: 'wp_plugin_form'
        $wpdb->insert('wp_plugin_form', array('firstName' => $fname, 'lastName' => $lname, 'email' => $email, 'phone' => $phone, 'message' => $message));
    }

    $form .= '<form action="#" method="POST"> ';
    $form .= '<label for="first_name" class="form-label" >Prénom: </label> ';
    $form .= '<input type="text" name="first_name" class="form-control" placeholder="Entrer votre prénom svp"/> <br> ';

    $form .= '<label for="last_name"  class="form-label">Nom: </label> ';
    $form .= '<input type="text" name="last_name" class="form-control" placeholder="Entrer votre nom svp"/><br> ';

    $form .= '<label for="email" class="form-label" >Email: </label> ';
    $form .= '<input type="email" name="email" class="form-control" placeholder="Entrer votre email svp"/><br> ';

    $form .= '<label for="phone" class="form-label" >Telephone: </label> ';
    $form .= '<input type="phone" name="phone" class="form-control" placeholder="Entrer votre numero de telephone svp"/><br> ';

    $form .= '<label for="message"  class="form-label" >Message ou Questions: </label> ';
    $form .= '<textarea name="message" class="form-control" placeholder="Entrer vos questions ou vos message"></textarea> <br>';

    $form .= '<input type="submit" class="btn btn-info" name="form_submit" value="Envoyer" /> ';
    $form .= '</form>';
    return $form;
}

//form shortcode ['form_shortcode']
add_shortcode('form_shortcode', 'form_plugin');