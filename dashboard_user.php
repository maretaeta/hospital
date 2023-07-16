<?php
session_start();

include_once("db/koneksi.php");
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
                <h1 class="sm:text-5xl text-2xl md:leading-normal leading-10 text-slate-600 font-bold">
                    Find The <span class="text-cyan-600 "> Best Doctor </span> Near You
                </h1>
                <p class="text-sm text-slate-400 pb-4 ">We are Ilo! Dokter, we help you find general specialist and the
                    closest
                    doctor to handle your healt
                    problems </p>
                <button class="h-12 text-sm px-2 bg-cyan-800 rounded-xl text-white w-32 text-center hover:scale-110">
                    <a href="reservasi.php"> Reservation</a>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                </p>
            </div>

            <div class="mx-auto flex justify-center items-center">
                <div>
                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input1" class="absolute peer opacity-0" />
                        <label for="input1" class="text-sm mx-7 h-14 flex items-center">
                            Apa saja syarat yang dibutuhkan?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                                nihil doloribus voluptate ea molestiae! Non quod, similique
                                omnis maiores blanditiis voluptatem pariatur eaque aut quia
                                praesentium accusantium, iusto, asperiores at.
                            </p>
                        </div>
                    </div>

                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input2" class="absolute peer opacity-0" />
                        <label for="input2" class="text-sm mx-7 h-14 flex items-center">
                            Berapa hari minimal sewa mobil lepas kunci?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                                nihil doloribus voluptate ea molestiae! Non quod, similique
                                omnis maiores blanditiis voluptatem pariatur eaque aut quia
                                praesentium accusantium, iusto, asperiores at.
                            </p>
                        </div>
                    </div>

                    <div class="relative w[-400] border shadow-[6px_6px_10px_-1px_rgba(0, 0, p, 0.15), -6px,_-6px_10px_-1px_rgba(255, 255,0.8)] rounded m-[15px]">
                        <input type="checkbox" id="input3" class="absolute peer opacity-0" />
                        <label for="input3" class="text-sm mx-7 h-14 flex items-center">
                            Berapa hari sebelumnya sebaiknya booking sewa mobil?
                        </label>
                        <div class="absolute top-4 right-4 transform peer-checked:rotate-180 transition-transform duration-200">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                            <p class="p-4 pl-7 text-sm">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                                nihil doloribus voluptate ea molestiae! Non quod, similique
                                omnis maiores blanditiis voluptatem pariatur eaque aut quia
                                praesentium accusantium, iusto, asperiores at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>

<?php include("partials/footer.php"); ?>