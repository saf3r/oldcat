<x-app-layout>
    <div class="relative bg-white w-[calc(100%-3.25rem)] mx-auto shadow-md rounded-md p-6">
        <div class="grid gap-4 grid-cols-4 grid-rows-1 w-full">
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium">{{ $cat }}</p>
                    <span class="text-sm text-gray-500">{{ __('Котика') }}</span>
                </div>
                <div class="flex items-center justify-center w-[40px] h-[40px] p-2 bg-gray-100 rounded-md">
                    <i class="fa-light fa-cat  text-2xl  text-gray-600 "></i>
                </div>
            </div>
            <div class="flex items-center justify-between border-r border-gray-200 pr-5">
                <div>
                    <p class="text-2xl text-gray-700 font-medium">{{ $card }}</p>
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

    <div class="relative bg-white w-[calc(100%-3.25rem)] mx-auto shadow-md rounded-md">
        <div class="flex justify-between items-center p-6">
            <div class="flex justify-center items-center space-x-3">
                <p>Показать</p>
                <select id="card_row" class="block w-[70px] p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                </select>
                <x-buttons.basic-link href="{{ route('card.index') }}">
                    <i class="fa-regular fa-plus mr-2"></i>
                    Создать карточку
                </x-buttons.basic-link >
            </div>
            <div class="flex items-center space-x-3">
                <div>
                    <input type="text" id="card_search" class="block w-[200px] p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]" placeholder="Поиск карточки" required />
                </div>
                <select id="card_status" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
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
                        <th class="font-medium py-[18.5px] px-3">Номер карточки</th>
                        <th class="font-medium py-[18.5px] px-3">Кличка и пол</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">Окрас</th>
                        <th class="font-medium py-[18.5px] px-3">Пол</th>
                        <th class="font-medium py-[18.5px] px-3">Порода</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">Вакцинация</th>
                        <th class="font-medium py-[18.5px] px-3">Дата создания</th>
                        <th class="font-medium py-[18.5px] px-3 text-center">Статус</th>
                        <th class="font-medium py-[18.5px] px-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cards as $card)
                        <tr class="text-gray-500 border-b border-gray-200">
                            <td class="px-3 font-medium text-[#7367f0] hover:text-[#8176f2] transition text-base">{{ __('#') }}{{ $card->card_number }}</td>
                            <td class="flex items-center space-x-3 py-[8.75px] px-3 w-[150px]">
                                <div>
                                    @if ($card->photo_src)
                                        <img src="{{ url('/img/'.$card->photo_src) }}" class="rounded-full w-[38px] h-[38px] cursor-pointer" alt="Аватарка пользователя {{ $card->name }}">
                                    @else
                                        <div class="relative w-[38px] h-[38px] bg-blue-400 rounded-full">
                                            <span class="absolute font-extrabold top-[8.5px] left-[8.5px] text-white uppercase">{{ mb_substr($card->name, 0, 2, 'UTF-8') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">{{ $card->name ?? '-' }}</p>
                                    <p class="text-sm text-gray-500">{{ ucfirst($card->age) ?? '-' }} {{ $card->age_type }}</p>
                                </div>
                            </td>
                            <td class="px-3 text-base text-center">{{ $card->color ?? '-' }}</td>
                            <td class="px-3 text-base">{{ $card->gender ?? '-' }}</td>
                            <td class="px-3 text-base">{{ $card->breed ?? '-' }}</td>
                            <td class="px-3 text-base text-center">{{ $card->vaccination ?? '-' }}</td>
                            <td class="px-3 text-base">{{ $card->created_at->format('d.m.Y') }}</td>
                            <td class="px-3 text-center">
                                <span class="text-[{{ $card->status_color }}] bg-[{{ $card->status_background }}] font-medium text-sm px-2 py-1 rounded-md">{{ $card->status }}</span>
                            </td>
                            <td>
                                <div class="flex items-center justify-center space-x-1">
                                        
                                    <div class="tooltip" data-tip="Открыть">
                                        <x-buttons.small-link href="{{ route('card.index') }}">
                                            <i class="fa-light fa-eye"></i>
                                        </x-buttons.small-link>
                                    </div>

                                    <div class="tooltip" data-tip="Редактировать">
                                        <x-buttons.small-link href="{{ route('card.index') }}">
                                            <i class="fa-light fa-money-check-pen"></i>
                                        </x-buttons.small-link>
                                    </div>

                                    <div class="dropdown dropdown-left">
                                        <x-buttons.small tabindex="0" role="button">
                                            <i class="fa-light fa-ellipsis-vertical"></i>
                                        </x-buttons.small>
                                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                            <li>
                                                <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-trash-can-xmark mr-1 w-4 text-center"></i> Удалить</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-star mr-1 w-4 text-center"></i> В избранное</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active:!bg-[#e9e7fd] active:!text-[#7367f0] focus:!bg-[#e9e7fd] focus:!text-[#7367f0]"><i class="fa-light fa-paste mr-1 w-4 text-center"></i> Дублировать</a>
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
            {{ $cards->links() }}
        </div>
    </div>
    <span class="bg-[#fff0e1] bg-[#ebebed] bg-[#ffe2e3] bg-[#ddf6e8] text-[#ff9f43] text-[#808390] text-[#ff4c51] text-[#28c76f] hidden"></span>
</x-app-layout>
