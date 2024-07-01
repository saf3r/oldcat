<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/all.min.css', 'resources/js/app.js', 'resources/js/main.js']); ?>
    </head>
    <body class="font-golos-text antialiased">
        <div class="bg-[#f8f7fa]">

            
            <div class="flex min-h-screen">
                <div class="min-w-64 bg-[#2f3349] text-[#cfcce4]">
                    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="w-full">
                    <header class="relative bg-white w-[calc(100%-3.25rem)] max-w-[calc(1440px-1.5rem*2)] mx-auto my-3 px-6 shadow-md rounded-lg">
                        <div class="flex items-center justify-between p-2.5">
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                    <input type="text" id="global_search" class="border-0 placeholder-gray-400 transition-all focus:ring-0 focus:outline-0" placeholder="Поиск">
                                    <button id="global_search_close" class="absolute right-5 hidden">
                                        <i class="fa-regular fa-xmark"></i>
                                    </button>
                                    <span class="hidden absolute w-[calc(100%-1rem)] left-[.5rem]"></span>
                                </div>
                            </div>
                            <div>
                                <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" class="rounded-full w-10 h-10" alt="">
                            </div>
                        </div>
                    </header>

                    <!-- Page Content -->
                    <main>
                        <?php echo e($slot); ?>

                    </main>
                </div>
            </div>

            
            
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\oldcat\resources\views/layouts/app.blade.php ENDPATH**/ ?>