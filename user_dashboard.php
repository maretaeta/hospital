<?php
session_start();

include_once("db/koneksi.php");
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<?php include("partials/header.php"); ?>
<?php include("partials/navbar.php"); ?>

<div class="relative overflow-hidden h-full font-[poppins]">
    <div id="home" class="pt-24 sm:pt-36 flex py-6 px-5 md:flex-row flex-col items-center bg-slate-100">
        <div class="flex-1 flex items-center justify-center h-full">
            <img src="./img/hero.png" />
        </div>
        <div class="flex-1">
            <div class="md:text-left text-center">
                <h1 class="sm:text-5xl text-2xl md:leading-normal leading-10 text-slate-600 font-bold pb-3">
                    Effortless

                    <span class="text-cyan-600 ">Health Center Reservations</span> at Your Fingertips
                </h1>
                <p class="text-sm text-slate-400 pb-4 ">Find and book general specialists and nearby doctors easily. Simplify your healthcare journey with just a few taps. Download now for seamless access to quality healthcare. </p>
                <button class="h-12 text-sm px-2 bg-cyan-800 rounded-xl text-white w-32 text-center hover:scale-110">
                    <a href="user_reservasi.php"> Reservation</a>
                </button>
            </div>
        </div>
    </div>


    <div class="pt-14 sm:pt-20 py-6 px-8  flex gap-9  md:flex-row flex-col items-center">
        <div class="flex flex-col">
            <span class="text-cyan-600 font-bold uppercase text-sm">What we do ?</span>
            <h1 class="py-2 text-gray-600 capitalize text-xl sm:text2xl font-bold"> we provide you many great services
            </h1>
            <p class="text-xs text-slate-400">These are services we provide to help you fix your helath problems </p>
        </div>
        <div class="">
            <div class="w-full max-w-6xl mx-auto justify-center md:grid-cols-3 grid gap-3">
                <div class="max-w-sm p-6 shadow-md rounded-lg">
                    <img src="./img/oke.png" class="" />
                    <h1 class="font-semibold pb-2 pt-2">Medicine</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        If you have any ailmentes, always seek the attention off a trained medical doctor
                    </p>
                </div>
                <div class="max-w-sm p-6 shadow-md rounded-lg">
                    <img src="./img/price.png" />
                    <h1 class="font-semibold pb-2 pt-2">Nursing</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Maintain the healt providing resedential accommodations with health care
                    </p>
                </div>
                <div class="max-w-sm p-6 shadow-md rounded-lg hover:scale-110">
                    <img src="./img/jam.png" />
                    <h1 class="font-semibold pb-2 pt-2">Psychology</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Consider a subspecial the field of psychiatry and neurology
                    </p>
                </div>

            </div>
        </div>
    </div>


    <div id="faq" class="pt-14 sm:pt-20 py-6 px-5  flex gap-9  md:flex-row flex-col items-center">

        <div class="container max-w-7xl mx-auto grid md:grid-cols-2 w-full justify-items-center">
            <div class="pt-12 text-center">
                <p class="font-bold text-2xl">Frequently Asked Question</p>
                <p class="md:text-center md:pt-2 pb-2">
                    Here are some commonly asked questions about our app that simplifies health center reservations
                </p>
            </div>

            <div class="mx-auto flex justify-center items-center">
                <div>
                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0" />
                        <label for="input1" class="text-sm mx-7 h-14 flex items-center">
                            What is CareConnect?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                CareConnect is a mobile application that allows you to make health center reservations with ease. It helps you find general specialists and locate the nearest doctors to handle your health problems.
                            </p>
                        </div>
                    </div>

                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0" />
                        <label for="input2" class="text-sm mx-7 h-14 flex items-center">
                            How does CareConnect work?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                CareConnect provides a user-friendly interface where you can search for doctors based on their specialty and location. You can browse through verified profiles, read patient reviews, and book appointments directly through the app.
                            </p>
                        </div>
                    </div>

                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0" />
                        <label for="input3" class="text-sm mx-7 h-14 flex items-center">
                            Can I book appointments in real-time?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                Yes, CareConnect provides real-time availability information, allowing you to book appointments based on the doctors' schedules. You can select a suitable time slot that fits your schedule conveniently.
                            </p>
                        </div>
                    </div>

                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0" />
                        <label for="input3" class="text-sm mx-7 h-14 flex items-center">
                            Is CareConnect free to use?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                Yes, CareConnect is free to download and use. However, the fees for medical consultations or services provided by the doctors are determined by the healthcare providers themselves.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include("partials/footer.php"); ?>