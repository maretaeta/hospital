<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        .mobile-menu-hidden {
            display: none;
        }

        .mobile-menu-visible {
            right: 0;
        }
    </style>
</head>

<body>
    <nav class="fixed w-full left-0 top-0 px-3 md:px-8 p-2 drop-shadow-lg z-10 font-[poppins]" id="navbar">
        <div class="flex items-center justify-between z-10 gap-6 cursor-pointer h-10 sm:h-14">
            <div class="flex items-center justify-center">
                <img src="./img/logo.png" class="h-20 pt-5" />
                <h4 class="md:text-2xl pt-3 text-xl font-bold text-cyan-800">
                    CareConnect
                </h4>
            </div>
            <div class="lg:text-lg text-white pt-3 items-center">
                <ul class="hidden md:flex font-bold gap-3 md:gap-5">
                    <li class="hover:text-cyan-600 relative text-cyan-800 cursor-pointer transition-all 
                 before:absolute before:-bottom-2 before:left-0 before:w-0 before:h-1 before:rounded-full before:opacity-0 before:transition-all
                 before:duration-500 before:bg-cyan-600 hover:before:w-full hover:before:opacity-100">
                        <a href="dashboard_user.php">
                            Home
                        </a>
                    </li>


                    <li class="hover:text-cyan-600 text-cyan-800 relative cursor-pointer transition-all 
                 before:absolute before:-bottom-2 before:left-0 before:w-0 before:h-1 before:rounded-full before:opacity-0 before:transition-all
                 before:duration-500 before:bg-cyan-600 hover:before:w-full hover:before:opacity-100">
                        <a href="find.php">
                            Layanan
                        </a>
                    </li>
                    <li class="hover:text-cyan-600 text-cyan-800 relative cursor-pointer transition-all 
                 before:absolute before:-bottom-2 before:left-0 before:w-0 before:h-1 before:rounded-full before:opacity-0 before:transition-all
                 before:duration-500 before:bg-cyan-600 hover:before:w-full hover:before:opacity-100">
                        <a href="Informasi.php">
                            Information
                        </a>
                    </li>

                </ul>
            </div>
            <div class="text-gray-900 md:block hidden font-medium rounded-bl-full pt-3 items-center">


                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-cyan-800 hover:bg-cyan-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center">Hi, User <svg class=" w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="riwayat.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">History</a>
                        </li>
                        <li>
                            <a href="logout.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="text-gray-900 md:hidden text-3xl z-[999] m-5 mt-7 flex items-center" id="toggleButton">
                <ion-icon name="menu"></ion-icon>
            </div>
            <div class="text-gray-900 md:hidden absolute w-1/2 h-screen px-7 py-2 font-medium bg-white top-0 right-0 mobile-menu-hidden" id="mobileMenu">
                <ul class="flex flex-col justify-center items-center h-full gap-10 text-lg">
                    <li class="">
                        <a href="dashboard_user.php">Home</a>
                    </li>

                    <li class="">
                        <a href="find.php"> Layanan</a>
                    </li>
                    <li class="">
                        <a href="Informasi.php"> Information</a>

                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <script>
        const navbar = document.getElementById('navbar');
        const toggleButton = document.getElementById('toggleButton');
        const mobileMenu = document.getElementById('mobileMenu');

        toggleButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('mobile-menu-hidden');
            mobileMenu.classList.toggle('mobile-menu-visible');
        });

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                navbar.classList.add('bg-slate-200', 'text-white', 'lg:h-20', 'items-center');
            } else {
                navbar.classList.remove('bg-slate-200', 'text-white', 'lg:h-20', 'items-center');
            }
        });
    </script>
</body>

</html>