<div class="flex justify-between items-center mb-3">
    <a href="/" class="py-3 my-2 mx-auto">
        <img src="/img/logo-short.png" class="w-40 px-[1.15rem] group-[.open]:hidden" alt="Логотип 'Старый Кот'">
        <img src="/img/logo.png" class="w-40 group-[.close]:hidden" alt="Логотип 'Старый Кот'">
    </a>
</div>
<ul class="flex justify-between flex-col h-[calc(100vh-88px)] space-y-2">
    <div class="space-y-2">
        <li>
            <a href="/" class="{{ (request()->is('/')) ? 'bg-[linear-gradient(270deg,rgba(115,103,240,0.7)_0%,_#7367f0_100%)] text-white' : '' }} group-[.open]:flex group-[.open]:items-center group-[.close]:block group-[.close]:text-center group-[.close]:w-[70%] group-[.close]:mx-auto space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition-all">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-house-blank"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Главная') }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pet.index') }}" class="{{ (request()->is('pets*')) ? 'bg-[linear-gradient(270deg,rgba(115,103,240,0.7)_0%,_#7367f0_100%)] text-white' : '' }} group-[.open]:flex group-[.open]:items-center group-[.close]:block group-[.close]:text-center group-[.close]:w-[70%] group-[.close]:mx-auto space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition-all">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-paw-simple"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Питомцы') }}</span>
            </a>
        </li>
        <li>
            <p class="py-2 px-3 mx-3 text-[#acaab1] text-sm uppercase">
                <span class="group-[.close]:hidden">{{ __('Администрирование') }}</span>
            </p>
        </li>
        <li>
            <a href="#" class="group-[.open]:flex group-[.open]:items-center group-[.close]:block group-[.close]:text-center group-[.close]:w-[70%] group-[.close]:mx-auto space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition-all">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-users"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Пользователи') }}</span>
            </a>
        </li>
        <li>
            <a href="#" class="group-[.open]:flex group-[.open]:items-center group-[.close]:block group-[.close]:text-center group-[.close]:w-[70%] group-[.close]:mx-auto space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition-all">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-files"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Справочники') }}</span>
            </a>
        </li>
        <li>
            <a href="#" class="group-[.open]:flex group-[.open]:items-center group-[.close]:block group-[.close]:text-center group-[.close]:w-[70%] group-[.close]:mx-auto space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition-all">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-list-tree"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Логи') }}</span>
            </a>
        </li>
        <li>
            <p class="py-2 px-3 mx-3 text-[#acaab1] text-sm uppercase">
                <span class="group-[.close]:hidden">{{ __('Личная информация') }}</span>
            </p>
        </li>
        <li>
            <a href="#" class="flex items-center group-[.close]:w-max group-[.close]:p-[.68rem] space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-user"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Профиль') }}</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center group-[.close]:w-max group-[.close]:p-[.68rem] space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-gear"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Настройки') }}</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center group-[.close]:w-max group-[.close]:p-[.68rem] space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3"><i class="fa-regular fa-arrow-right-from-bracket"></i></span> 
                <span class="group-[.close]:hidden">{{ __('Выход') }}</span>
            </a>
        </li>
    </div>
    <div class="space-y-2">
        <li>
            <a href="#" id="sidebar_status" class="group-[.open]:flex group-[.open]:items-center group-[.close]:block group-[.close]:text-center group-[.close]:w-[70%] group-[.close]:mx-auto space-x-3 py-2 px-3 mx-3 hover:bg-[rgba(225,222,245,.06)] rounded-md transition-all">
                <span class="group-[.open]:w-5 text-center group-[.open]:mr-3">
                    <i class="fa-regular group-[.close]:hidden fa-xmark"></i>
                    <i class="fa-regular group-[.open]:hidden fa-bars"></i>
                </span>
                <span class="group-[.close]:hidden">{{ __('Скрыть меню') }}</span>
            </a>
        </li>
    </div>
</ul>

<script>
    $("#sidebar_status").on("click", function(e) {
        var _token = $("input[name='_token']").val();

        $.ajax({
            url : "/sidebar",
            data: { _token:_token },
            type : 'POST',
            dataType : 'json'
        });
    });
</script>