<?php
include("db/koneksi.php");

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = 'user';


    $query = "INSERT INTO users (email, name, password, role) VALUES ('$email', '$name', '$password', '$role')";

    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
        exit;
    } else {
        $error_message = "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

include('partials/header.php');
?>

<section class="bg-slate-800 min-h-screen flex items-center justify-center p-5">
    <div class="bg-white relative rounded-2xl shadow-lg max-w-3xl p-8 ">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="font-bold text-2xl text-[#002D74] text-center mb-10">Welcome to CareConnect</h2>
                <form method="POST" class="flex flex-col gap-4">
                    <input class="p-2 rounded-xl border" type="email" name="email" placeholder="Email" required />
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="text" name="name" placeholder="Full Name" required />
                    </div>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="Password" required />
                    </div>
                    <button type="submit" name="register" class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Daftar</button>
                </form>
                <div class="mt-3 text-xs flex gap-1 justify-center items-center text-[#002D74]">
                    <p>have an account?</p>
                    <button class="py-2 underline hover:scale-110 duration-300"><a href="login.php">Login</a></button>
                </div>
            </div>
            <div class="px-8 md:px-16 flex justify-center">
                <img class="rounded-2xl " src="./img/image.png" />
            </div>
        </div>
    </div>
</section>