<script>
    function dropDown() {
        const gear = document.getElementById('gear');
        const isOpen = document.getElementById('checkGear').checked;
        const profileBox = document.getElementById('profileBox');
        if (isOpen) {
            profileBox.classList.add('h-[25rem]', 'ring-1', 'ring-white');
            profileBox.classList.remove('h-[7rem]');
            gear.classList.add('rotate-90');
            gear.classList.remove('rotate-0');
        } else {
            profileBox.classList.add('h-[7rem]');
            profileBox.classList.remove('h-[25rem]', 'ring-1', 'ring-white');
            gear.classList.add('rotate-0');
            gear.classList.remove('rotate-90');
        }
    }
    function updateProfile() {
        alert('Profile updated');
    }
</script>

<div id="profileBox" class="overflow-y-hidden h-[7rem] flex flex-col rounded-2xl relative py-8 mt-2 transition-all duration-500">
            <div class="flex justify-center">
                <ul class="texto text-white text-center">
                    <li class="subtitulo-pesado text-white text-center">Nombre de usuario</li>
                    <li>Informática y Tecnología Multimedia</li>
                    <li>C52145</li>
                </ul>
                <div class='absolute top-2 right-2'>
                    <input class="size-6 fixed opacity-0 z-20" onChange="dropDown()" type="checkbox" id="checkGear"/>
                    <img id="gear" class="" src="{{ asset('storage/images/gear.svg') }}" alt="gear icon" />
                </div>
            </div>
            <div class="px-4">
                <p class="text-white pt-4">Nombre de usuario:</p>
                <input class="w-full rounded-lg h-8 pt-2 bg-blue-1 px-4 py-1" type="text" />
            </div>
            <div class="px-4">
                <p class="text-white pt-4">Contraseña:</p>
                <input class="w-full rounded-lg h-8 pt-2 bg-blue-1 px-4 py-1" type="password" />
            </div>
            <div class="px-4">
                <p class="text-white pt-4">Nueva contraseña:</p>
                <input class="w-full rounded-lg h-8 pt-2 bg-blue-1 px-4 py-1" type="password" />
            </div>
            <div class="p-4">
                <button class="font-bold bg-orange-1 w-full rounded-lg h-8" onClick={updateProfile}>Submit</button>
            </div>
        </div>