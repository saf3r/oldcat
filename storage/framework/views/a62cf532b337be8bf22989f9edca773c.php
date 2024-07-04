<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="relative bg-white w-[calc(100%-3.25rem)] mx-auto shadow-md rounded-md p-6">
        <div class="grid gap-4 grid-cols-4 grid-rows-1 w-full">
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium"><?php echo e($cat); ?></p>
                    <span class="text-sm text-gray-500"><?php echo e(__('Котика')); ?></span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-cat  text-2xl  text-gray-600 "></i>
                </div>
            </div>
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium"><?php echo e($card); ?></p>
                    <span class="text-sm text-gray-500"><?php echo e(__('Карточки')); ?></span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-clipboard-list text-2xl text-gray-600 "></i>
                </div>
            </div>
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium"><?php echo e($quarantine); ?></p>
                    <span class="text-sm text-gray-500"><?php echo e(__('В карантине')); ?></span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-briefcase-medical text-2xl text-gray-600"></i>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-2xl text-gray-700 font-medium"><?php echo e($archive); ?></p>
                    <span class="text-sm text-gray-500"><?php echo e(__('В архиве')); ?></span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-box-archive text-2xl text-gray-600"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-white w-[calc(100%-3.25rem)] mx-auto shadow-md rounded-md">
        <div class="flex justify-between items-center p-6">
            <div class="flex justify-center items-center space-x-3">
                <p><?php echo e(__('Показать')); ?></p>
                <select id="card_row" class="block w-[70px] p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                    <option value="10"><?php echo e(__(10)); ?></option>
                    <option value="20"><?php echo e(__(20)); ?></option>
                    <option value="30"><?php echo e(__(30)); ?></option>
                    <option value="50"><?php echo e(__(50)); ?></option>
                </select>
                <?php if (isset($component)) { $__componentOriginale8d8d68908fba8cac9dba287edc06aa5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale8d8d68908fba8cac9dba287edc06aa5 = $attributes; } ?>
<?php $component = App\View\Components\Buttons\Basic::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.basic'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Buttons\Basic::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'sidebar_button']); ?>
                    <i class="fa-regular fa-plus mr-2"></i>
                    <?php echo e(__('Создать карточку')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale8d8d68908fba8cac9dba287edc06aa5)): ?>
<?php $attributes = $__attributesOriginale8d8d68908fba8cac9dba287edc06aa5; ?>
<?php unset($__attributesOriginale8d8d68908fba8cac9dba287edc06aa5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale8d8d68908fba8cac9dba287edc06aa5)): ?>
<?php $component = $__componentOriginale8d8d68908fba8cac9dba287edc06aa5; ?>
<?php unset($__componentOriginale8d8d68908fba8cac9dba287edc06aa5); ?>
<?php endif; ?>
            </div>
            <div class="flex items-center space-x-3">
                <div>
                    <input type="text" id="card_search" class="block w-[200px] p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]" placeholder="Поиск карточки" required />
                </div>
                <select id="card_status" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                    <option value="">Все</option>
                    <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <hr class="border-gray-200 mx-6">
        <div class="px-3">
            <table class="w-full text-sm">
                <thead>
                    <tr class="uppercase text-left border-b border-gray-200">
                        <th class="font-medium py-[18.5px] px-3"><?php echo e(__('Номер карточки')); ?></th>
                        <th class="font-medium py-[18.5px] px-3"><?php echo e(__('Кличка и пол')); ?></th>
                        <th class="font-medium py-[18.5px] px-3 text-center"><?php echo e(__('Окрас')); ?></th>
                        <th class="font-medium py-[18.5px] px-3"><?php echo e(__('Пол')); ?></th>
                        <th class="font-medium py-[18.5px] px-3"><?php echo e(__('Порода')); ?></th>
                        <th class="font-medium py-[18.5px] px-3 text-center"><?php echo e(__('Вакцинация')); ?></th>
                        <th class="font-medium py-[18.5px] px-3"><?php echo e(__('Дата создания')); ?></th>
                        <th class="font-medium py-[18.5px] px-3 text-center"><?php echo e(__('Статус')); ?></th>
                        <th class="font-medium py-[18.5px] px-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-gray-500 border-b border-gray-200">
                            <td class="px-3 font-medium text-[#7367f0] hover:text-[#8176f2] transition text-base"><?php echo e(__('#')); ?><?php echo e($card->card_number); ?></td>
                            <td class="flex items-center space-x-3 py-[8.75px] px-3 w-[150px]">
                                <div>
                                    <?php if($card->photo_src): ?>
                                        <img src="<?php echo e(url('/img/'.$card->photo_src)); ?>" class="rounded-full w-[38px] h-[38px] cursor-pointer" alt="Аватарка пользователя <?php echo e($card->name); ?>">
                                    <?php else: ?>
                                        <div class="relative w-[38px] h-[38px] bg-blue-400 rounded-full">
                                            <span class="absolute font-extrabold top-[8.5px] left-[8.5px] text-white uppercase"><?php echo e(mb_substr($card->name, 0, 2, 'UTF-8')); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800"><?php echo e($card->name ?? '-'); ?></p>
                                    <p class="text-sm text-gray-500"><?php echo e(ucfirst($card->age) ?? '-'); ?> <?php echo e($card->age_type); ?></p>
                                </div>
                            </td>
                            <td class="px-3 text-base text-center"><?php echo e($card->color ?? '-'); ?></td>
                            <td class="px-3 text-base"><?php echo e($card->gender ?? '-'); ?></td>
                            <td class="px-3 text-base"><?php echo e($card->breed ?? '-'); ?></td>
                            <td class="px-3 text-base text-center"><?php echo e($card->vaccination ?? '-'); ?></td>
                            <td class="px-3 text-base"><?php echo e($card->created_at->format('d.m.Y')); ?></td>
                            <td class="px-3 text-center">
                                <span class="text-[<?php echo e($card->status_color); ?>] bg-[<?php echo e($card->status_background); ?>] font-medium text-sm px-2 py-1 rounded-md"><?php echo e($card->status); ?></span>
                            </td>
                            <td>
                                <div class="flex items-center justify-center space-x-1">
                                        
                                    <div class="tooltip" data-tip="Открыть">
                                        <?php if (isset($component)) { $__componentOriginal8c7dc2351eb10be485e77a39c3859f74 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c7dc2351eb10be485e77a39c3859f74 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.small-link','data' => ['href' => ''.e(route('card.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.small-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('card.index')).'']); ?>
                                            <i class="fa-light fa-eye"></i>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c7dc2351eb10be485e77a39c3859f74)): ?>
<?php $attributes = $__attributesOriginal8c7dc2351eb10be485e77a39c3859f74; ?>
<?php unset($__attributesOriginal8c7dc2351eb10be485e77a39c3859f74); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c7dc2351eb10be485e77a39c3859f74)): ?>
<?php $component = $__componentOriginal8c7dc2351eb10be485e77a39c3859f74; ?>
<?php unset($__componentOriginal8c7dc2351eb10be485e77a39c3859f74); ?>
<?php endif; ?>
                                    </div>

                                    <div class="tooltip" data-tip="Редактировать">
                                        <?php if (isset($component)) { $__componentOriginal8c7dc2351eb10be485e77a39c3859f74 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c7dc2351eb10be485e77a39c3859f74 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.small-link','data' => ['href' => ''.e(route('card.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.small-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('card.index')).'']); ?>
                                            <i class="fa-light fa-money-check-pen"></i>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c7dc2351eb10be485e77a39c3859f74)): ?>
<?php $attributes = $__attributesOriginal8c7dc2351eb10be485e77a39c3859f74; ?>
<?php unset($__attributesOriginal8c7dc2351eb10be485e77a39c3859f74); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c7dc2351eb10be485e77a39c3859f74)): ?>
<?php $component = $__componentOriginal8c7dc2351eb10be485e77a39c3859f74; ?>
<?php unset($__componentOriginal8c7dc2351eb10be485e77a39c3859f74); ?>
<?php endif; ?>
                                    </div>

                                    <div class="dropdown dropdown-left">
                                        <?php if (isset($component)) { $__componentOriginal4007d51f9a28c17ec6c04e7428e2480b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4007d51f9a28c17ec6c04e7428e2480b = $attributes; } ?>
<?php $component = App\View\Components\Buttons\Small::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.small'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Buttons\Small::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tabindex' => '0','role' => 'button']); ?>
                                            <i class="fa-light fa-ellipsis-vertical"></i>
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
                                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                            <li>
                                                <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-trash-can-xmark mr-1 w-4 text-center"></i> <?php echo e(__('Удалить')); ?></a>
                                            </li>
                                            <li>
                                                <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-star mr-1 w-4 text-center"></i> <?php echo e(__('В избранное')); ?></a>
                                            </li>
                                            <li>
                                                <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-paste mr-1 w-4 text-center"></i> <?php echo e(__('Дублировать')); ?></a>
                                            </li>
                                        </ul>
                                      </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="p-6">
            <?php echo e($cards->links()); ?>

        </div>
    </div>
    <div id="overlay" class="hidden fixed top-0 left-0 right-0 bottom-0 w-full h-full bg-[#97959e] opacity-60 !m-0 z-40"></div>
    <div id="sidebar" class="fixed top-0 right-0 bg-white h-full w-[384px] !m-0 z-50 translate-x-96 transition-all">
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h1 class="text-lg font-semibold text-gray-700">Создание карточки</h1>
            <i id="sidebar_close" class="fa-regular fa-xmark text-2xl text-gray-500 cursor-pointer"></i>
        </div>
        <div class="p-6">
            <form action="" class="space-y-6">
                <div>
                    <label for="card_number" class="block mb-1 text-[13px] font-medium text-gray-600">Номер карточки</label>
                    <input type="text" id="card_number" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0] transition-all" placeholder="1Ж-701" required />
                </div>
                <div>
                    <label for="first_name" class="block mb-1 text-[13px] font-medium text-gray-600">Тестовое поле</label>
                    <input type="text" id="first_name" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0] transition-all" placeholder="1Ж-701" required />
                </div>
                <div>
                    <label for="card_status2" class="block mb-1 text-[13px] font-medium text-gray-600">Статус карточки</label>
                    <select id="card_status2" class="block w-full p-2 border border-gray-300 text-gray-600 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                        <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <span class="bg-[#fff0e1] bg-[#ebebed] bg-[#ffe2e3] bg-[#ddf6e8] text-[#ff9f43] text-[#808390] text-[#ff4c51] text-[#28c76f] hidden !translate-x-0"></span>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\oldcat\resources\views/card/index.blade.php ENDPATH**/ ?>