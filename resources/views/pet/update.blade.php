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
        <form method="POST" action="{{ route('pet.update') }}" enctype="multipart/form-data">

            @csrf
            <input type="text" class="hidden" name="id" value="{{ ($pet) ? $pet->id : '' }}">
            <input type="text" class="hidden" name="status_id" value="{{ ($pet) ? $pet->status_id : 1 }}">

            <div class="flex justify-start items-start space-x-6 mb-6">
                <div class="w-full space-y-6">
                    <div>
                        <label for="pet_name" class="block mb-1 text-[13px] font-medium text-gray-600">Кличка</label>
                        <input type="text" id="pet_name" name="name" value="{{ ($pet) ? $pet->name : old('name') }}" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0] transition-all placeholder:text-gray-300" placeholder="Мурка" required />
                    </div>
                    <div class="flex space-x-3">
                        <div class="w-full">
                            <label for="pet_type" class="block mb-1 text-[13px] font-medium text-gray-600">Вид</label>
                            <select id="pet_type" name="type_id" class="block w-full p-2 border border-gray-300 text-gray-600 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" {{ ($pet) ? (($pet->type_id == $type->id) ? 'selected' : '') : ((old('type_id') == $type->id) ? 'selected' : '') }}>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="pet_gender" class="block mb-1 text-[13px] font-medium text-gray-600">Пол</label>
                            <select id="pet_gender" name="gender_id" class="block w-full p-2 border border-gray-300 text-gray-600 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                                @foreach($genders as $gender)
                                    <option value="{{ $gender->id }}" {{ ($pet) ? (($pet->gender_id == $gender->id) ? 'selected' : '') : ((old('gender') == $gender->id) ? 'selected' : '') }}>{{ $gender->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="pet_breed" class="block mb-1 text-[13px] font-medium text-gray-600">Порода</label>
                        <select id="pet_breed" name="breed_id" class="block w-full p-2 border border-gray-300 text-gray-600 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                            @foreach($breeds as $breed)
                                <option value="{{ $breed->id }}" {{ ($pet) ? (($pet->breed_id == $breed->id) ? 'selected' : '') : ((old('breed') == $breed->id) ? 'selected' : '') }}>{{ $breed->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="w-full space-y-6">
                    <div>
                        <label for="pet_name" class="block mb-1 text-[13px] font-medium text-gray-600">Окрас</label>
                        <div>
                            <x-buttons.basic id="sidebar_button" type="button" class="w-full bg-white !text-gray-600 border border-gray-300 hover:bg-gray-100 !px-2 !block !text-left lowercase first-letter:uppercase font-normal">
                                @if($pet)
                                    @if($name_colors)
                                        {{ $name_colors }}
                                    @else
                                        <span class="text-gray-300">{{ __('Выбрать окрас') }}</span>
                                    @endif
                                @else
                                    <span class="text-gray-300">{{ __('Выбрать окрас') }}</span>
                                @endif
                            </x-buttons.basic>
                        </div>
                    </div>
                    <div>
                        <label for="pet_age_value" class="block mb-1 text-[13px] font-medium text-gray-600">Возраст</label>
                        <div class="flex items-center justify-center space-x-3">
                            <input type="number" id="pet_age_value" name="age_value" value="{{ ($pet) ? $pet->age_value : old('age_value') }}" class="block w-full p-2 border border-gray-300 text-gray-800 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0] transition-all placeholder:text-gray-300" placeholder="10" required />
                            <select id="pet_age_id" name="age_id" class="block w-28 p-2 border border-gray-300 text-gray-600 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                                @foreach($ages as $age)
                                    <option value="{{ $age->id }}" {{ ($pet) ? (($pet->age_id == $age->id) ? 'selected' : '') : ((old('age_id') == $age->id) ? 'selected' : '') }}>{{ $age->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="pet_curator" class="block mb-1 text-[13px] font-medium text-gray-600">Куратор</label>
                        <select id="pet_curator" name="curator_id" class="block w-full p-2 border border-gray-300 text-gray-600 text-sm rounded-md focus:ring-[#7367f0] focus:border-[#7367f0]">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ ($pet) ? (($pet->curator_id == $user->id) ? 'selected' : '') : ((old('curator_id') == $user->id) ? 'selected' : '') }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="w-full space-y-6">
                    <div class="mx-auto text-center">
                        <label for="image" class="cursor-pointer">
                            @if($pet)
                                @if($pet->photo_src)
                                    <div id="preview" style="background-image: url('/uploads/{{ $pet->photo_src }}')" class="relative block bg-blue-400 w-[200px] h-[200px] mx-auto bg-cover bg-center rounded-full">
                                        <span class="absolute font-extrabold text-[53px] top-[57px] left-[62px] text-white uppercase" style="display: none;">{{ mb_substr($pet->name, 0, 2, 'UTF-8') }}</span>
                                    </div>
                                @else
                                    <div id="preview" class="relative block w-[200px] h-[200px] mx-auto bg-blue-400 rounded-full uppercase bg-cover bg-center">
                                        <span class="absolute font-extrabold text-[53px] top-[57px] left-[62px] text-white uppercase">{{ mb_substr($pet->name, 0, 2, 'UTF-8') }}</span>
                                    </div>
                                @endif
                            @else
                                <div id="preview" class="relative block w-[200px] h-[200px] mx-auto bg-blue-400 rounded-full uppercase bg-cover bg-center">
                                    <span class="absolute font-extrabold text-[53px] top-[57px] left-[62px] text-white uppercase">АБ</span>
                                </div>
                            @endif
                        </label>
                        <div class="mt-3">
                            <span id="deletePreview" class="border-b-2 border-dotted border-[#ff4c51] px-2 pb-1 text-[#ff4c51] hover:text-[#ff4c51] transition-all text-xs font-medium uppercase mt-3 cursor-pointer">Удалить изображение</span>
                        </div>
                        <input type="file" class="hidden form-control" id="image" name="image">
                    </div>
                </div>
            </div>

            <x-buttons.basic type="submit">
                @if($pet) 
                    <i class="fa-solid fa-floppy-disk mr-2"></i> 
                    {{ __('Сохранить изменения') }}
                @else 
                    <i class="fa-light fa-plus mr-2"></i> 
                    {{ __('Добавить питомца') }} 
                @endif
            </x-buttons.basic>

            <div id="overlay" class="hidden fixed top-0 left-0 right-0 bottom-0 w-full h-full bg-[#97959e] opacity-60 !m-0 z-40"></div>
            <div id="sidebar" class="fixed top-0 right-0 bg-white h-full w-[384px] !m-0 z-50 translate-x-96 transition-all">
                <div class="flex items-center justify-between p-6 border-b border-gray-200">
                    <h1 class="text-lg font-semibold text-gray-700">Выбор окраса питомца</h1>
                    <i id="sidebar_close" class="fa-regular fa-xmark text-2xl text-gray-500 cursor-pointer"></i>
                </div>
                <div class="overflow-y-auto h-[calc(100%-65px)] p-6 space-y-3">
                    @foreach ($pet_color as $color)
                        <div class="flex items-center ps-4 border border-gray-200 rounded active:border-[#7367f0] focus:border-[#7367f0]">
                            @if($pet)
                                @if(in_array($color->id, $colors))
                                    <input id="pet_color_{{ $color->id }}" type="checkbox" value="{{ $color->id }}" name="color[]" class="color_select w-4 h-4 text-[#7367f0] bg-gray-100 border-gray-300 rounded focus:ring-[#7367f0]" checked>
                                @else
                                    <input id="pet_color_{{ $color->id }}" type="checkbox" value="{{ $color->id }}" name="color[]" class="color_select w-4 h-4 text-[#7367f0] bg-gray-100 border-gray-300 rounded focus:ring-[#7367f0]">
                                @endif
                            @else
                                @if(is_array(old('color')))
                                    @if(in_array($color->id, old('color')))
                                        <input id="pet_color_{{ $color->id }}" type="checkbox" value="{{ $color->id }}" name="color[]" class="color_select w-4 h-4 text-[#7367f0] bg-gray-100 border-gray-300 rounded focus:ring-[#7367f0]" checked>
                                    @else
                                    <input id="pet_color_{{ $color->id }}" type="checkbox" value="{{ $color->id }}" name="color[]" class="color_select w-4 h-4 text-[#7367f0] bg-gray-100 border-gray-300 rounded focus:ring-[#7367f0]">
                                    @endif
                                @else
                                    <input id="pet_color_{{ $color->id }}" type="checkbox" value="{{ $color->id }}" name="color[]" class="color_select w-4 h-4 text-[#7367f0] bg-gray-100 border-gray-300 rounded focus:ring-[#7367f0]">
                                @endif
                            @endif
                            <label for="pet_color_{{ $color->id }}" class="w-full py-4 ms-2 text-sm font-medium">{{ $color->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div> 

    <script>
        $( document ).ready(function() {

            var checkboxes = [];
            $('.color_select:checked').each(function(){
                //добавляем значение каждого флажка в этот массив
                checkboxes.push($(this).next('label').html());
            });
            $("#sidebar_button").html(checkboxes.join(', '));
            

            $("#overlay, #sidebar_close").on("click", function(e) {
                var checkboxes = [];
                $('.color_select:checked').each(function(){
                    //добавляем значение каждого флажка в этот массив
                    checkboxes.push($(this).next('label').html());
                });
                $("#sidebar_button").html(checkboxes.join(', '));
            });

            $('#image').change(function() {
                previewImage(this);
            });

            function previewImage(input) {
                var preview = $('#preview')[0];
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        preview.style.backgroundImage = "url('" + e.target.result + "')";
                        $("#preview").find("span")[0].style.display = "none";
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#deletePreview").on("click", function() {
                var preview = $('#preview')[0];
                $("#image").val("");
                $("#preview").find("span")[0].style.display = "block";
                preview.style.backgroundImage = "";
            });

        });
    </script>
</x-app-layout>