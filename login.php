<?php
include("db/koneksi.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa kecocokan email dan password dalam database
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['role'] == 'admin') {
            header("Location: dashboard_admin.php");
            exit;
        } else {
            header("Location: dashboard_user.php");
            exit;
        }
    } else {
        $error_message = "Email atau password salah.";
    }
}
?>

<?php


include('partials/header.php');

?>


<section class="bg-slate-800 min-h-screen flex items-center justify-center p-5">
    <div class="bg-white relative rounded-2xl shadow-lg max-w-3xl p-8 ">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="font-bold text-2xl text-[#002D74] text-center mb-4">Login</h2>
                <form method="POST" action="" class="flex flex-col gap-4">
                    <?php if (isset($error_message)) : ?>
                        <div class="error-message text-red-600"><?php echo $error_message; ?></div>
                    <?php endif; ?>
                    <input class="p-2 rounded-xl border" type="email" name="email" placeholder="Email" required />
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password" required />
                    </div>
                    <button type="submit" name="login" class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
                </form>
                <div class="mt-3 text-xs flex gap-1 justify-center items-center text-[#002D74]">
                    <p>Don't have an account?</p>
                    <button class="py-2 underline hover:scale-110 duration-300"> <a href="register.php">Register </a></button>
                </div>
            </div>
            <div class="md:w-1/2 px-8 md:px-16 flex justify-center">
                <img class="rounded-2xl md:mt-0 mt-8" src="./img/image.png" />
            </div>
        </div>
    </div>
</section>