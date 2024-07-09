<x-app-layout>
    @section('title', $title)
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="text-[#7367f0] hover:text-[#8176f2] !no-underline"><i class="fa-solid fa-house-blank mr-3"></i> Главная</a></li>
            <li><a href="{{ route('pet.index') }}" class="text-gray-700 hover:text-[#8176f2] !no-underline">Питомцы</a></li>
            <li><span class="inline-flex items-center gap-2 text-gray-500">{{ $title }}</span></li>
        </ul>
    </div>

    <div class="relative bg-white mx-auto shadow-md rounded-md p-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-6 text-sm font-medium">
                <p class="font-semibold text-[#7367f0] text-base mr-6">Основная <br> информация</p>
                <div>
                    <p class="text-gray-400">Создана</p>
                    <p class="text-gray-400">Обновлена</p>
                </div>
                <div>
                    <p class="text-gray-700 font-semibold">{{ $pet->created_at->format('d.m.Y') ?? '-' }}</p>
                    <p class="text-gray-700 font-semibold">{{ $pet->updated_at->format('d.m.Y') ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-gray-400">Куратор</p>
                    <p class="text-gray-400">Автор</p>
                </div>
                <div>
                    <p class="text-gray-700 font-semibold">{{ $pet->curator_name ?? '-' }}</p>
                    <p class="text-gray-700 font-semibold">{{ $pet->author_name ?? '-' }}</p>
                </div>
                <div> 
                    @if($pet->archived_at)
                        <span class="text-[#575757] bg-[#a5a5a5] font-semibold text-sm px-2 py-1 rounded-md">В архиве</span>
                    @endif
                </div>
            </div>
            <div class="flex items-center">
                <div class="tooltip" data-tip="Закрыть карточку и добавить в архив">
                    <x-buttons.small tabindex="0" role="button">
                        <i class="fa-light fa-rectangle-xmark"></i>
                    </x-buttons.small>
                </div>
                {{-- <div class="tooltip" data-tip="Добавить в архив">
                    <x-buttons.small tabindex="0" role="button">
                        <i class="fa-light fa-box-archive"></i>
                    </x-buttons.small>
                </div> --}}
                <div class="tooltip" data-tip="Редактировать карточку">
                    <x-buttons.small tabindex="0" role="button">
                        <i class="fa-light fa-money-check-pen"></i>
                    </x-buttons.small>
                </div>
                <div class="dropdown dropdown-left">
                    <x-buttons.small tabindex="0" role="button">
                        <i class="fa-light fa-ellipsis-vertical"></i>
                    </x-buttons.small>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li>
                            <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-trash-can-xmark mr-1 w-4 text-center"></i> {{ __('Удалить') }}</a>
                        </li>
                        <li>
                            <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-star mr-1 w-4 text-center"></i> {{ __('В избранное') }}</a>
                        </li>
                        <li>
                            <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-paste mr-1 w-4 text-center"></i> {{ __('Дублировать') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="relative bg-white mx-auto shadow-md rounded-md p-6">
        <p class="font-semibold text-gray-700 mb-2">Информация о питомце</p>
        <div class="flex items-start justify-between w-full space-x-6 text-sm">
            <div class="space-y-1.5 w-full">
                <div class="flex items-center justify-between p-1.5 border-b border-gray-200">
                    <p class="bg-white font-semibold text-gray-500">Кличка</p>
                    <p class="text-gray-700 font-medium">{{ $pet->name }}</p>
                </div>
                <div class="flex items-center justify-between p-1.5 border-b border-gray-200">
                    <p class="bg-white font-semibold text-gray-500">Вид</p>
                    <p class="text-gray-700 font-medium">{{ $pet->type }}</p>
                </div>
                <div class="flex items-center justify-between p-1.5 border-b border-gray-200">
                    <p class="bg-white font-semibold text-gray-500">Возраст</p>
                    <p class="text-gray-700 font-medium">{{ $pet->age }} {{ $pet->age_type }}</p>
                </div>
                <div class="flex items-center justify-between p-1.5">
                    <p class="bg-white font-semibold text-gray-500">Состояние питомца</p>
                    <p class="text-gray-700 font-medium">
                        <span class="text-[{{ $pet->pet_status_color }}] bg-[{{ $pet->pet_status_background }}] font-medium text-sm px-2 py-1 rounded-md">{{ $pet->pet_status }}</span>
                    </p>
                </div>
            </div>
            <div class="space-y-1.5 w-full">
                <div class="flex items-center justify-between p-1.5 border-b border-gray-20">
                    <p class="bg-white font-semibold text-gray-500">Пол</p>
                    <p class="text-gray-700 font-medium">{{ $pet->gender }}</p>
                </div>
                <div class="flex items-center justify-between p-1.5 border-b border-gray-200">
                    <p class="bg-white font-semibold text-gray-500">Порода</p>
                    <p class="text-gray-700 font-medium">{{ $pet->breed }}</p>
                </div>
                <div class="flex items-center justify-between p-1.5">
                    <p class="bg-white font-semibold text-gray-500">Окрас</p>
                    <p class="text-gray-700 font-medium lowercase first-letter:uppercase">{{ $pet->color }}</p>
                </div>
                @if($pet->pet_status == 5)
                <div class="flex items-center justify-between p-1.5 border-t border-gray-200">
                    <p class="bg-white font-semibold text-gray-500">Окрас</p>
                    <p class="text-gray-700 font-medium lowercase first-letter:uppercase">{{ $pet->color }}</p>
                </div>
                @endif
            </div>
            <div>
                @if($pet->photo_src)
                    <div id="preview" style="background-image: url('/uploads/{{ $pet->photo_src }}')" class="relative block bg-blue-400 w-[150px] h-[150px] mx-auto bg-cover bg-center rounded-md">
                        <span class="absolute font-extrabold text-[53px] top-[57px] left-[59px] text-white uppercase" style="display: none;">{{ mb_substr($pet->name, 0, 1, 'UTF-8') }}</span>
                    </div>
                @else
                    <div id="preview" class="relative block w-[150px] h-[150px] mx-auto bg-blue-400 rounded-md uppercase bg-cover bg-center">
                        <span class="absolute font-extrabold text-[53px] top-[63px] left-[59px] text-white uppercase">{{ mb_substr($pet->name, 0, 1, 'UTF-8') }}</span>
                    </div>
                @endif
            </div>
        </div>
        <div class="flex items-start p-1.5 mt-1.5 border-t border-gray-200">
            <p class="bg-white font-semibold text-gray-500 text-sm">
                Примечание
                <span class="text-gray-500 font-medium italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit doloremque molestiae quos distinctio laudantium placeat quidem est exercitationem consequuntur tempora libero corrupti quas officiis nulla, culpa consectetur hic vero. Voluptatum.</span>
            </p>
        </div>
    </div>
</x-app-layout>
