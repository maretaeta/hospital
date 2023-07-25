<?php
include("db/koneksi.php");

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'user';


    $query = "INSERT INTO users (email, name, username, password, role) VALUES ('$email', '$name', '$username', '$password', '$role')";

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
                    <div>
                        <label>
                            <p>Email</p>
                        </label>
                        <input class="p-2 rounded-md border border-cyan-800" type="email" name="email" placeholder="Enter Email" required />
                    </div>
                    <div class="relative">
                        <label>
                            <p>Full Name </p>
                        </label>
                        <input class="p-2 rounded-md border border-cyan-800" type="text" name="name" placeholder="Enter Full Name" required />
                    </div>
                    <div class="relative">
                        <label>
                            <p>Username </p>
                        </label>
                        <input class="p-2 rounded-md border border-cyan-800" type="text" name="username" placeholder="Enter Username" required />
                    </div>
                    <div class="relative mb-3">
                        <label>
                            <p>Password</p>
                        </label>
                        <input class="p-2 rounded-md border border-cyan-800" type="password" name="password" placeholder="Enter Password" required />
                    </div>
                    <button type="submit" name="register" class="bg-[#002D74] rounded-md text-white p-2 hover:scale-105 duration-300">Daftar</button>
                </form>
                <div class="mt-3 text-xs flex gap-1 justify-center items-center text-[#002D74]">
                    <p>have an account?</p>
                    <button class="py-2 underline hover:scale-110 duration-300"><a href="login.php">Login</a></button>
                </div>
            </div>
            <div class="px-8 md:px-16 flex justify-center">
                <img class="rounded-2xl w-full" src="./img/image.png" />
            </div>
        </div>
    </div>
</section>