    <script>
        function showMenu(input) {
            const menu = document.getElementsByName("menu")[0];
            const checkboxNav = document.getElementById("checkboxNav");
            if (input.checked) {
                menu.style.display = "block";
                checkboxNav.style.position = "fixed";
                menu.style.right = "0px";
                menu.style.transition = "right ease 0.5s";
                checkboxNav.style.zIndex = "30";
            } else {
                checkboxNav.style.position = "absolute";
                menu.style.transition = "right ease 0.5s";
                menu.style.right = "-1000px";
                menu.style.display = "none";
            }
        }
    </script>

    <div class='relative w-screen'>

    <div class="relative">
      <input
        class="opacity-0 absolute  right-4 sm:right-8 top-6  size-[3rem] z-10"
        onChange="showMenu(this)"
        id="checkboxNav"
        name=""
        type="checkbox"
      />
      <div class="relative bg-blue-2 sm:px-8 px-4 sm:gap-x-10 gap-x-28">
        <div class="flex sm:justify-between justify-center items-center">
          <div class="w-full flex justify-end">
            <div class="flex justify-center items-center">
              <img
                alt="User Profile"
                class="absolute rounded-full top-6 right-8  ring-4 ring-white size-[3rem]"
                src="https://randomuser.me/api/portraits/women/31.jpg"
              />
            </div>
          </div>
        </div>

        <!--Side Menu -->
        <div class="fixed top-0 right-[-1000px] z-20  w-full sm:w-[25rem] h-screen bg-[#181818] px-[1.188rem] overflow-y-auto scrollbar-hide   overflow-hidden " name="menu">
          <div class="relative flex justify-between py-4">
            <div class="flex sm:hidden gap-8 ">
            </div>
            <div class="relative">
            </div>
            <h1 class="absolute right-3 sm:right-8 top-8 text-white text-2xl font-bold cursor-pointer">X</h1>
          </div>

          <div class="w-full flex justify-center mb-4">
            <div class="relative">
              <img alt="User Profile" class="rounded-full w-20 ring-4 ring-white size-[5rem]" src="api.dicebear.com/7.x/bottts/png" />
              <div class="absolute top-16 right-1 rounded-full bg-yellow-500 size-8 text-white text-2xl font-bold">
                <input class="absolute rounded-full size-8 z-30 opacity-0" type="file" name="" id="" />
                <img class="absolute top-2 right-2 size-4" src="{{ asset('storage/images/edit-white.svg') }}" alt="" />
              </div>
            </div>
          </div>

          <div class="flex flex-col gap-y-4">
            <!-- <ProfileDropDown /> -->
            @include('layouts.profileDropDown')

            <div class="flex flex-col gap-y-4">
              <hr class="w-[90vw] text-white bg-white" />
              <a class="px-4 flex justify-center items-center bg-blue-1 sm:h-[3.5rem] h-[2rem] rounded-full font-main text-blue-3" href="{{route('course.index')}}">Registro de cursos </a>
              <a class="px-4 flex justify-center items-center bg-blue-1 sm:h-[3.5rem] h-[2rem] rounded-full font-main text-blue-3" href="{{route('event.index')}}">Registro de Eventos</a> 
              <hr class="w-[90vw] text-white bg-white" />
              <button class="texto text-white flex justify-center mb-4">Cerrar sesión</button>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="flex flex-col justify-center items-center gap-3 mb-3 ">
            <svg
                fill="none"
                height="141"
                viewBox="0 0 141 141"
                width="141"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M64.3989 70.8118C66.1869 70.1322 67.2221 68.4095 68.1004 66.829C69.904 63.194 70.8764 60.2227 72.7899 56.3663C78.4362 47.3734 94.6065 50.5028 101.351 56.477L100.143 55.9238C109.679 56.7614 119.528 58.5948 127.731 63.7471C118.838 60.0962 109.051 59.2112 99.5626 59.2902C98.2295 58.0416 96.6611 56.9669 94.6221 56.1609C88.6622 53.8376 79.6595 52.0516 75.5033 58.0416C74.719 59.2902 74.1544 61.3764 73.2604 63.1465C72.586 65.0589 71.1588 66.6236 69.7472 68.0776C68.3199 69.421 66.4692 70.8592 64.4303 70.796L64.3989 70.8118Z"
                    fill="white"
                />
                <path
                    d="M102.715 67.7457C95.8611 71.9972 90.4658 78.0662 87.031 85.2258C85.9488 87.7545 84.5529 90.4097 82.7649 92.5275C72.4134 104.365 56.8862 109.786 41.7197 111.114C25.9258 111.73 10.1476 128.926 0.297998 140.4L0 140.147C3.34071 135.39 6.86963 130.68 9.70844 125.796C10.1162 124.99 10.6652 124.09 10.822 123.268C11.0886 121.419 11.4651 119.554 11.9042 117.768C15.5272 104.476 21.3303 87.3436 34.3324 80.7214C26.0199 88.8766 21.895 99.7977 17.723 110.45C16.1546 114.812 14.6332 119.269 13.5824 123.773C13.4569 124.342 13.2844 124.722 13.0962 125.117C9.73981 130.98 4.97185 135.674 0.297998 140.416L0 140.163C9.39476 128.167 22.1773 113.137 37.3281 108.996C52.6671 107.273 69.2295 102.153 79.1575 89.6511C80.8357 87.549 81.5258 85.0835 83.1256 82.9183C87.8936 75.9958 94.9044 70.4009 102.715 67.7457Z"
                    fill="white"
                />
                <path
                    d="M62.7204 70.4483C58.47 60.0172 53.3413 49.9338 48.7145 39.6923C42.582 27.096 35.979 13.4881 25.1727 4.43199L27.3528 4.1475C26.2549 5.69637 25.3139 7.78259 24.6865 9.8056C20.0126 25.2152 29.8466 40.3877 40.0255 51.1666L37.767 53.3634C31.6973 47.3418 25.5491 40.9725 18.4129 36.2943L20.7812 34.9193C21.4085 49.0329 25.0629 64.1897 34.8341 74.7788C38.2689 78.1926 42.5977 80.595 47.2872 81.8593C44.8719 81.5116 42.4409 80.9427 40.1196 79.9786C28.1056 74.9211 21.879 62.135 19.4794 49.918C18.209 44.1177 17.613 38.1119 17.5659 32.0903C22.3652 34.7455 26.5372 38.2699 30.521 41.9366C33.7833 44.9237 36.9358 47.9898 40.0255 51.1508L37.767 53.3476L33.1559 48.1479C24.3414 37.4481 17.2993 22.9235 21.7065 8.84151C22.5064 6.09149 23.918 3.35727 25.7844 0.92334L27.0548 1.91904C37.3592 10.4378 43.4917 22.3387 49.4517 33.9552C55.3802 45.4927 59.3326 57.9468 62.7204 70.4483Z"
                    fill="white"
                />
                <path
                    d="M115.733 96.9686L113.208 96.6683L114.635 94.5504C115.654 93.0332 117.427 90.2515 117.834 89.2717C118.509 87.6122 119.371 82.934 119.403 82.0805V81.8592C119.371 81.6696 119.371 81.4799 119.371 81.2745C119.371 76.944 122.869 75.7744 127.151 75.7744C131.432 75.7744 134.93 76.9598 134.93 81.2745V81.4009C134.93 81.5115 134.93 81.6064 134.93 81.717C135.134 84.0403 135.604 88.0705 136.075 89.3033C136.436 90.2831 138.318 93.0016 139.416 94.4872L141 96.6367L138.365 96.9686C138.177 97.0002 133.597 97.5691 127.151 97.5691C120.705 97.5691 115.952 97.0002 115.748 96.9844L115.733 96.9686ZM133.142 90.4096C132.358 88.3392 131.856 82.5388 131.793 81.875V81.7644V81.6538C131.793 81.5906 131.793 81.5273 131.793 81.4641V81.2745C131.793 78.6667 129.691 76.5647 127.119 76.5647C124.547 76.5647 122.445 78.6825 122.445 81.2745C122.445 81.3377 122.445 81.4009 122.445 81.4799L122.477 81.9066C122.508 83.2817 121.473 88.5446 120.689 90.4728C120.328 91.3421 119.434 92.8435 118.619 94.1237C120.61 94.2817 123.637 94.4556 127.119 94.4556C130.601 94.4556 133.377 94.2976 135.306 94.1395C134.428 92.8593 133.487 91.3579 133.142 90.4412V90.4096Z"
                    fill="white"
                />
                <path
                    d="M126.963 74.6682H126.978C128.226 74.6682 129.237 73.6493 129.237 72.3923V72.3765C129.237 71.1196 128.226 70.1006 126.978 70.1006H126.963C125.715 70.1006 124.704 71.1196 124.704 72.3765V72.3923C124.704 73.6493 125.715 74.6682 126.963 74.6682Z"
                    fill="white"
                />
            </svg>
            <h1 class="text-6xl text-white">
                vinx
            </h1>
            <h2 class="text-2xl text-center mb-[1.562rem]">
                Agenda Virtual Universitaria
            </h2>
        </div> 


       
