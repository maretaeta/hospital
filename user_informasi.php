<?php
include_once("db/koneksi.php");
?>

<?php include("partials/header.php"); ?>
<?php include("partials/navbar.php"); ?>

<div class="min-h-screen flex items-center p-5 ">
    <div class="text-black py-8">
        <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                <p class="text-cyan-600 font-semibold uppercase tracking-loose">Information</p>
                <p class="text-3xl md:text-4xl text-cyan-900 font-bold leading-normal md:leading-relaxed mb-2">Navigate through the Steps to Understand the Process in Detail</p>
                <p class="text-sm md:text-base mb-4 text-slate-400">
                    Navigate the RS Reservation Registration process with ease. This comprehensive guide will walk you through each step, providing a detailed understanding. Simplify your registration journey and access quality healthcare seamlessly.
                </p>
            </div>
            <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                <div class="container mx-auto w-full h-full">
                    <div class="relative wrap overflow-hidden p-10 h-full">
                        <div class="border-2-2 border-cyan-900 absolute h-full border" style="right: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                        <div class="border-2-2 border-cyan-900 absolute h-full border" style="left: 50%; border: 2px solid #FFC100; border-radius: 1%;"></div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">Registration</h4>
                                <p class="list-disc text-sm md:text-base leading-snug text-slate-400 text-opacity-100">
                                    Enter patient data for registration and select the destination clinic, date and time of service
                                </p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1  w-5/12 px-1 py-4 text-left">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">Re-Registration</h4>
                                <p class="text-sm md:text-base leading-snug text-slate-400 text-opacity-100">
                                    Confirm arrival to the re-registration officer and get a queue number from the officer
                                </p>
                            </div>
                        </div>
                        <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                            <div class="order-1 w-5/12"></div>
                            <div class="order-1 w-5/12 px-1 py-4 text-right">
                                <h4 class="mb-3 font-bold text-lg md:text-2xl">Waiting</h4>
                                <p class="text-sm md:text-base leading-snug text-slate-400 text-opacity-100">
                                    Wait for your queue number to be called
                                </p>
                            </div>
                        </div>

                        <div class="mb-8 flex justify-between items-center w-full right-timeline">
                            <div class="order-1 w-5/12"></div>

                            <div class="order-1  w-5/12 px-1 py-4">
                                <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Examination</h4>
                                <p class="text-sm md:text-base leading-snug text-slate-400 text-opacity-100">
                                    Start patient examination
                                </p>
                            </div>
                        </div>
                    </div>
                    <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("partials/footer.php"); ?>