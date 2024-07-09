<x-app-layout>
    @section('title', $title)
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="text-[#7367f0] hover:text-[#8176f2] !no-underline"><i class="fa-solid fa-house-blank mr-3"></i> Главная</a></li>
            <li><span class="inline-flex items-center gap-2 text-gray-500">Питомцы</span></li>
        </ul>
    </div>
    <div class="relative bg-white mx-auto shadow-md rounded-md p-6">
        <div class="grid gap-4 grid-cols-4 grid-rows-1 w-full">
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium">{{ $pet }}</p>
                    <span class="text-sm text-gray-500">{{ __('Питомцев') }}</span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-cat  text-2xl  text-gray-600 "></i>
                </div>
            </div>
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium">-</p>
                    <span class="text-sm text-gray-500">{{ __('Карточки') }}</span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-clipboard-list text-2xl text-gray-600 "></i>
                </div>
            </div>
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium">{{ $quarantine }}</p>
                    <span class="text-sm text-gray-500">{{ __('В карантине') }}</span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-briefcase-medical text-2xl text-gray-600"></i>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-2xl text-gray-700 font-medium">{{ $archive }}</p>
                    <span class="text-sm text-gray-500">{{ __('В архиве') }}</span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-box-archive text-2xl text-gray-600"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-white mx-auto shadow-md rounded-md">
        <div class="flex justify-between items-center p-6">
            <div class="flex justify-center items-center space-x-3">
                <p>{{ __('Показать') }}</p>
                <select id="pet_row" class="block w-[70px] p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                    <option value="10">{{ __(10) }}</option>
                    <option value="20">{{ __(20) }}</option>
                    <option value="30">{{ __(30) }}</option>
                    <option value="50">{{ __(50) }}</option>
                </select>
                <x-buttons.basic-link href="{{route('pet.add')}}">
                    <i class="fa-regular fa-plus mr-2"></i>
                    {{ __('Добавить питомца') }}
                </x-buttons.basic-link>
            </div>
            <div class="flex items-center space-x-3">
                <div>
                    <input type="text" id="pet_search" class="block w-[200px] p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]" placeholder="Поиск карточки" required />
                </div>
                <select id="pet_status" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                    <option value="">Все</option>
                    @foreach ($status as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <hr class="border-gray-200 mx-6">
        <div class="px-3">
            <table class="w-full text-sm">
                <thead>
                    <tr class="uppercase text-left border-b border-gray-200">
                        <th class="font-medium py-[18.5px] px-3">{{ __('#') }}</th>
                        <th class="font-medium py-[18.5px] px-3">{{ __('Кличка и возраст') }}</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">{{ __('Окрас') }}</th>
                        <th class="font-medium py-[18.5px] px-3">{{ __('Пол') }}</th>
                        <th class="font-medium py-[18.5px] px-3">{{ __('Порода') }}</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">{{ __('Вакцинация') }}</th>
                        <th class="font-medium py-[18.5px] px-3">{{ __('Дата создания') }}</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">{{ __('Статус') }}</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">{{ __('Состояние') }}</th>
                        <th class="font-medium py-[18.5px] px-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr class="text-gray-500 border-b border-gray-200">
                            <td class="px-3 font-medium text-[#7367f0] hover:text-[#8176f2] transition text-base">
                                <a href="{{ route('pet.view', ['id' => $pet->id]) }}">{{ __('#') }}{{ $pet->id }}</a>
                            </td>
                            <td class="flex items-center space-x-3 py-[8.75px] px-3 w-[150px]">
                                <div>
                                    @if($pet->photo_src)
                                        <div style="background-image: url('/uploads/{{ $pet->photo_src }}')" class="relative block w-[38px] h-[38px] mx-auto bg-cover bg-center rounded-full">
                                            <span class="absolute font-extrabold text-[53px] top-[57px] left-[62px] text-white uppercase" style="display: none;">{{ mb_substr($pet->name, 0, 2, 'UTF-8') }}</span>
                                        </div>
                                    @else
                                        <div class="relative w-[38px] h-[38px] bg-blue-400 rounded-full cursor-pointer">
                                            <span class="absolute font-extrabold top-[8.5px] left-[8.5px] text-white uppercase">{{ mb_substr($pet->name, 0, 2, 'UTF-8') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">{{ $pet->name ?? '-' }}</p>
                                    <p class="text-sm text-gray-500">{{ ucfirst($pet->age) ?? '-' }} {{ $pet->age_type }}</p>
                                </div>
                            </td>
                            <td class="px-3 text-base text-center">{{ $pet->color ?? '-' }}</td>
                            <td class="px-3 text-base">{{ $pet->gender ?? '-' }}</td>
                            <td class="px-3 text-base">{{ $pet->breed ?? '-' }}</td>
                            <td class="px-3 text-base text-center">{{ $pet->vaccination ?? '-' }}</td>
                            <td class="px-3 text-base">{{ $pet->created_at->format('d.m.Y') }}</td>
                            <td class="px-3">
                                <span class="flex items-center text-[{{ $pet->status_color }}] font-medium text-sm">
                                    <i class="fa-solid fa-circle text-[10px] mr-3"></i>
                                    {{ $pet->status }}
                                </span>
                            </td>
                            <td class="px-3 text-center">
                                <span class="text-[{{ $pet->pet_status_color }}] bg-[{{ $pet->pet_status_background }}] font-medium text-sm px-2 py-1 rounded-md">{{ $pet->pet_status }}</span>
                            </td>
                            <td>
                                <div class="flex items-center justify-center space-x-1">
                                        
                                    <div class="tooltip" data-tip="Открыть">
                                        <x-buttons.small-link href="{{ route('pet.view', ['id' => $pet->id]) }}">
                                            <i class="fa-light fa-eye"></i>
                                        </x-buttons.small-link>
                                    </div>

                                    <div class="tooltip" data-tip="Редактировать">
                                        <x-buttons.small-link href="{{ route('pet.edit', ['id' => $pet->id]) }}">
                                            <i class="fa-light fa-money-check-pen"></i>
                                        </x-buttons.small-link>
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-6">
            {{ $pets->links() }}
        </div>
    </div>

    <span class="bg-[#e9e7fd] bg-[#ddf6e8] bg-[#fff0e1] bg-[#d6f4f8] bg-[#ffe2e3] text-[#7367f0] text-[#28c76f] text-[#ff9f43] text-[#00bad1] text-[#ff4c51] text-[#808390] text-[#ff4c51] hidden !translate-x-0"></span>
</x-app-layout>
