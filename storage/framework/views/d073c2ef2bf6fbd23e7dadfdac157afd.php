<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/css/all.min.css', 'resources/js/app.js', 'resources/js/main.js']); ?>
    </head>
    <body class="font-golos-text antialiased text-gray-800">
        <div class="bg-[#f8f7fa]">

            
            <div class="flex min-h-screen">
                <div class="min-w-64 bg-[#2f3349] text-[#cfcce4]">
                    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="w-full">
                    <header class="relative bg-white w-[calc(100%-3.25rem)] mx-auto my-3 px-6 mb-6 shadow-md rounded-md">
                        <div class="flex items-center justify-between py-2.5">
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                    <input type="text" id="global_search" class=" border-0 placeholder-gray-400 transition-all focus:ring-0 focus:outline-0 z-[2]" placeholder="Поиск">
                                    <button id="global_search_close" class="absolute right-5 hidden z-[2]">
                                        <i class="fa-regular fa-xmark"></i>
                                    </button>
                                    <span class="hidden absolute w-[calc(100%-1rem)] left-[.5rem]"></span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <?php if (isset($component)) { $__componentOriginal4007d51f9a28c17ec6c04e7428e2480b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4007d51f9a28c17ec6c04e7428e2480b = $attributes; } ?>
<?php $component = App\View\Components\Buttons\Small::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.small'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Buttons\Small::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'relative']); ?>
                                    <i class="fa-light fa-bell"></i>
                                    <i class="fa-solid fa-circle-small absolute top-[5px] right-[11px] text-[10px] text-[#ff4c51]"></i>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4007d51f9a28c17ec6c04e7428e2480b)): ?>
<?php $attributes = $__attributesOriginal4007d51f9a28c17ec6c04e7428e2480b; ?>
<?php unset($__attributesOriginal4007d51f9a28c17ec6c04e7428e2480b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4007d51f9a28c17ec6c04e7428e2480b)): ?>
<?php $component = $__componentOriginal4007d51f9a28c17ec6c04e7428e2480b; ?>
<?php unset($__componentOriginal4007d51f9a28c17ec6c04e7428e2480b); ?>
<?php endif; ?>
                                <div class="relative">
                                    <div id="header_profile_button"  class="relative">
                                        <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" class="rounded-full w-10 h-10 cursor-pointer" alt="Аватарка пользователя <?php echo e(Auth::user()->name); ?>">
                                        <i class="fa-solid fa-circle-small absolute bottom-[-3px] right-[5px] text-[14px] text-green-500 z-[1]"></i>
                                        <i class="fa-solid fa-circle-small absolute bottom-[-5px] right-[4px] text-[18px] text-white"></i>
                                    </div>
                                    <ul id="header_profile_list" class="hidden absolute right-[-5px] top-[4rem] w-max bg-white text-gray-800 rounded-md z-[1] py-2 shadow-md border border-[#eee]">
                                        <li class="mb-2 flex items-center space-x-3 py-2 px-3 mx-3 rounded-md transition-all">
                                            <div class="relative">
                                                <img src="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/avatars/1.png" class="rounded-full w-10 h-10" alt="">
                                                <i class="fa-solid fa-circle-small absolute bottom-[-4px] right-[5px] text-[14px] text-green-500 z-[1]"></i>
                                                <i class="fa-solid fa-circle-small absolute bottom-[-6px] right-[4px] text-[18px] text-white"></i>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-medium"><?php echo e(Auth::user()->name); ?></span>
                                                <span class="text-xs text-gray-500"><?php echo e(__('Администратор')); ?></span>
                                            </div>
                                        </li>
                                        <hr class="border-gray-200">
                                        <li class="mt-2">
                                            <a href="#" class="flex items-center py-2 px-3 mx-3 hover:bg-gray-100 rounded-md transition-all">
                                                <i class="fa-regular fa-user w-5 text-center text-sm mr-3"></i>
                                                <?php echo e(__('Профиль')); ?>

                                            </a>
                                        </li>
                                        <li class="mt-1 mb-2">
                                            <a href="#" class="flex items-center py-2 px-3 mx-3 hover:bg-gray-100 rounded-md transition-all">
                                                <i class="fa-light fa-id-card w-5 text-center text-sm mr-3"></i>
                                                <?php echo e(__('Мои карточки')); ?>

                                            </a>
                                        </li>
                                        <hr class="border-gray-200">
                                        <li class="mt-2">
                                            <a href="#" class="flex items-center py-2 px-3 mx-3 hover:bg-gray-100 rounded-md transition-all">
                                                <i class="fa-regular fa-gear w-5 text-center text-sm mr-3"></i>
                                                <?php echo e(__('Настройки')); ?>

                                            </a>
                                        </li>
                                        <li class="mt-2">
                                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                                <?php echo csrf_field(); ?>

                                                <?php if (isset($component)) { $__componentOriginal351e3b3fbc29be60920e619adc7397ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal351e3b3fbc29be60920e619adc7397ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.basic-link','data' => ['class' => 'w-[calc(100%-1.5rem)] mx-3 border-[#ff4c51]  !bg-[#ff4c51] text-white shadow-[0_0.125rem_0.375rem_0_rgba(255,76,81,.3)] hover:!bg-[#e64449] h-[30px]','href' => route('logout'),'onclick' => 'event.preventDefault();
                                                                this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.basic-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[calc(100%-1.5rem)] mx-3 border-[#ff4c51]  !bg-[#ff4c51] text-white shadow-[0_0.125rem_0.375rem_0_rgba(255,76,81,.3)] hover:!bg-[#e64449] h-[30px]','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                                                this.closest(\'form\').submit();']); ?>
                                                    <?php echo e(__('Выйти')); ?>

                                                    <i class="fa-light fa-arrow-right-from-bracket ml-1.5 text-[11px]"></i>
                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal351e3b3fbc29be60920e619adc7397ae)): ?>
<?php $attributes = $__attributesOriginal351e3b3fbc29be60920e619adc7397ae; ?>
<?php unset($__attributesOriginal351e3b3fbc29be60920e619adc7397ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal351e3b3fbc29be60920e619adc7397ae)): ?>
<?php $component = $__componentOriginal351e3b3fbc29be60920e619adc7397ae; ?>
<?php unset($__componentOriginal351e3b3fbc29be60920e619adc7397ae); ?>
<?php endif; ?>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </header>

                    <!-- Page Content -->
                    <main class="space-y-6">
                        <?php echo e($slot); ?>

                    </main>
                </div>
            </div>

            
            
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\oldcat\resources\views/layouts/app.blade.php ENDPATH**/ ?>