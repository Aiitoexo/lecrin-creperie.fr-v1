<div class="h-96 w-full sm:col-span-6 lg:col-span-4 2xl:col-span-3 1xl:col-span-4 col-span-12 relative">
    <div class="h-full w-full shadow-3xl rounded-7xl border-gray-800 border-8 overflow-y-hidden bg-gray-800">
        <div class="h-2/5 border-b-4 border-gray-800 relative">
            <img class="w-full h-full object-center object-cover" alt="{{ $item->alt_img }}" src="{{ $item->img }}">
            <div class="h-full w-4/6 flex items-end absolute bottom-0 left-0">
                <p class="w-full px-2 py-2 bg-gray-800 text-yellow-500 rounded-tr-4xl">{{ $item->name }}</p>
            </div>
        </div>
        <div class="h-3/5 flex flex-col justify-between">
            <div class="h-4/5 bg-yellow-500 grid grid-cols-12 py-2 px-4">
                <div class="col-span-8 border-r-2 border-gray-800">
                    @foreach ($item->ingredientRecipe as $ingredient)
                        <p>- {{ $ingredient->name }}</p>
                    @endforeach
                </div>
            </div>

            <form class="h-1/5 grid grid-cols-12"
                  action="{{ route('add.item') }}"
                  method="post">
                @csrf

                <input name="id" id="id" value="{{ $item->id }}" type="hidden">

                <div class="col-span-8 flex justify-center items-center gap-x-2">
                    <button type="button" class="text-xl h-6 w-6 rounded-full bg-white flex justify-center items-center less">-</button>
                    <input name="quantity" class="w-14 h-8 rounded-lg quantity text-center" type="text"value="1">
                    <button type="button" class="text-xl h-6 w-6 rounded-full bg-white flex justify-center items-center more">+</button>
                </div>

                @if (session('type_command'))
                    <button class="col-span-4 flex justify-center items-center">
                        <svg class="h-10 fill-current text-white" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48"
                             style="enable-background:new 0 0 48 48;" xml:space="preserve">
                                <switch>
                                    <g id="Calque_1">
                                        <path d="M9.73,15.72c0.31-1.93,0.64-3.8,0.92-5.67c0.42-2.8,2.07-4.28,4.91-4.35c0.77-0.02,1.55,0.03,2.32-0.05
				c0.27-0.03,0.63-0.25,0.76-0.49c0.34-0.61,0.83-0.93,1.51-0.93c2.27-0.01,4.55-0.01,6.82,0c0.74,0,1.27,0.31,1.62,1
				c0.11,0.22,0.47,0.42,0.72,0.43c0.85,0.05,1.7,0,2.55,0.01c2.16,0.02,4.12,1.64,4.49,3.75c-0.48,0.1-0.96,0.2-1.49,0.31
				c-0.08-0.18-0.15-0.35-0.23-0.53c-0.55-1.2-1.47-1.87-2.81-1.89c-0.67-0.01-1.35,0.02-2.02-0.01c-0.65-0.03-1.18,0.01-1.58,0.67
				c-0.17,0.28-0.73,0.46-1.11,0.47c-2.32,0.04-4.65,0.02-6.97,0.02c-0.6,0-1.03-0.26-1.38-0.75c-0.14-0.2-0.46-0.37-0.71-0.38
				c-0.95-0.04-1.9-0.04-2.85-0.01c-1.32,0.04-2.47,0.87-2.74,2.15c-0.42,2.02-0.71,4.07-1.07,6.23c6.04,0,12,0,18.02,0
				c-0.31,1.87-0.19,3.61,0.77,5.16c0.53,0.85,1.3,1.55,1.93,2.35c0.21,0.27,0.43,0.61,0.45,0.93c0.06,0.97,0.02,1.95,0.02,2.92
				c0.01,1.07,0.3,1.36,1.4,1.36c1.42,0,2.85,0,4.27,0c0.91,0,1.13-0.19,1.31-1.09c0.14-0.74,0.28-1.47,0.37-2.22
				c0.06-0.49,0.23-0.81,0.72-1.02c0.47-0.2,0.89-0.53,1.44-0.86c-0.24,1.45-0.46,2.79-0.69,4.14c-0.39,2.27-0.77,4.53-1.17,6.79
				c-0.26,1.48-0.85,2.82-1.87,3.94c-1.08,1.18-2.41,1.8-4.04,1.8c-7.02-0.02-14.05-0.04-21.07,0.01c-2.73,0.02-4.58-1.25-5.58-3.63
				c-0.61-1.45-0.86-3.07-1.14-4.63c-0.71-3.91-1.34-7.83-2.02-11.74c-0.05-0.28-0.19-0.56-0.36-0.79
				c-0.52-0.71-0.66-1.45-0.26-2.25c0.4-0.79,1.06-1.16,1.94-1.15C7.09,15.73,8.39,15.72,9.73,15.72z M19.32,37.61
				c0.72,0,1.45,0.01,2.17,0c0.75-0.01,1.14-0.34,1.15-1.07c0.03-1.6,0.03-3.19,0-4.79c-0.02-0.66-0.38-1.04-1.11-1.03
				c-1.5,0.02-2.99,0.02-4.49,0c-0.73-0.01-1.1,0.37-1.11,1.02c-0.04,1.6-0.03,3.19,0,4.79c0.01,0.73,0.4,1.06,1.15,1.07
				C17.83,37.62,18.58,37.61,19.32,37.61z M10.55,21.73c-0.82,0-1.65,0-2.47,0c-0.93,0.01-1.34,0.43-1.2,1.36
				c0.22,1.48,0.49,2.95,0.75,4.43c0.1,0.6,0.44,0.92,1.08,0.91c1.45-0.01,2.9-0.01,4.34,0c0.68,0,1.04-0.38,1.06-1
				c0.03-1.57,0.04-3.14,0-4.72c-0.02-0.62-0.38-1-1.07-0.98C12.2,21.75,11.37,21.73,10.55,21.73z M19.33,21.7
				c-0.77,0-1.55,0.01-2.32,0c-0.72-0.01-1.09,0.39-1.1,1.05c-0.03,1.55-0.03,3.1,0,4.64c0.01,0.66,0.37,1.08,1.08,1.08
				c1.52,0,3.05,0,4.57,0c0.7,0,1.11-0.38,1.12-1.04c0.02-1.57,0-3.15-0.05-4.72c-0.02-0.65-0.37-1.05-1.11-1.02
				C20.78,21.73,20.05,21.7,19.33,21.7z M30.76,34.15c0-0.75,0.02-1.5,0-2.25c-0.02-0.84-0.36-1.16-1.2-1.17
				c-1.3-0.01-2.59-0.01-3.89,0c-0.85,0-1.19,0.32-1.2,1.16c-0.02,1.5-0.02,2.99,0,4.49c0.01,0.88,0.37,1.22,1.23,1.22
				c1.27,0.01,2.54,0.01,3.82,0c0.87-0.01,1.22-0.34,1.24-1.22C30.77,35.64,30.76,34.89,30.76,34.15z M30.79,25.1
				C30.79,25.1,30.79,25.1,30.79,25.1c0-0.62,0.01-1.25,0-1.87c-0.01-1.22-0.35-1.54-1.57-1.52c-1.2,0.01-2.4,0.02-3.59,0.01
				c-0.75-0.01-1.14,0.29-1.15,1.05c-0.04,1.52-0.05,3.04-0.03,4.56c0.01,0.78,0.4,1.14,1.17,1.14c1.32,0.01,2.65,0.01,3.97,0
				c0.82-0.01,1.17-0.36,1.2-1.19C30.8,26.55,30.79,25.83,30.79,25.1z M32.56,34.13c0,0.77-0.01,1.55,0,2.32
				c0.01,0.57,0.21,1.03,0.85,1.15c1.69,0.32,3.26-0.36,4.22-1.8c0.8-1.21,0.99-2.6,1.1-3.99c0.06-0.72-0.36-1.06-1.12-1.07
				c-1.27-0.01-2.54-0.01-3.82,0c-0.88,0.01-1.2,0.32-1.22,1.22C32.54,32.68,32.56,33.4,32.56,34.13z M14.12,34.22
				c0-0.77,0.02-1.55,0-2.32c-0.02-0.85-0.35-1.17-1.19-1.17c-1.12-0.01-2.24-0.01-3.36,0c-0.86,0.01-1.24,0.39-1.16,1.26
				c0.14,1.55,0.63,2.97,1.7,4.14c0.73,0.8,1.61,1.32,2.71,1.44c0.84,0.1,1.27-0.25,1.3-1.11C14.14,35.72,14.12,34.97,14.12,34.22z
				 M9.43,17.8c-0.01,0.57,0.41,1.01,0.98,1c0.59-0.01,0.92-0.35,0.99-0.92c0.06-0.53-0.41-1.03-0.94-1.05
				C9.9,16.8,9.44,17.24,9.43,17.8z"/>
                                        <path d="M37.03,10.78c3.55-0.01,6.45,2.85,6.47,6.4c0.02,3.58-2.88,6.5-6.45,6.52c-3.57,0.01-6.46-2.92-6.47-6.58
				C30.56,13.67,33.49,10.79,37.03,10.78z M37.61,17.78c1.1,0,2.12,0,3.14,0c0.43,0,0.88-0.02,0.87-0.57c0-0.54-0.45-0.57-0.88-0.56
				c-1.02,0.01-2.04,0-3.14,0c0-1.09,0-2.11,0-3.13c0-0.44-0.1-0.89-0.61-0.81c-0.22,0.04-0.49,0.52-0.51,0.82
				c-0.06,1.01-0.02,2.03-0.02,3.12c-0.31,0-0.52,0-0.74,0c-0.87,0-1.75-0.04-2.62,0.03c-0.24,0.02-0.45,0.34-0.68,0.53
				c0.22,0.19,0.41,0.44,0.66,0.55c0.21,0.09,0.49,0.02,0.74,0.02c0.86,0,1.73,0,2.64,0c0,1.17-0.04,2.22,0.03,3.26
				c0.02,0.25,0.37,0.47,0.56,0.71c0.18-0.23,0.41-0.43,0.53-0.69c0.09-0.19,0.02-0.44,0.02-0.67
				C37.61,19.56,37.61,18.71,37.61,17.78z"/>
                                        <path class="st0" d="M31.51,19.81"/>
                                    </g>
                                </switch>
</svg>
                    </button>
                @else
                    <button id="button_modal" type="button" class="col-span-4 flex justify-center items-center">
                        <svg class="h-10 fill-current text-white" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48"
                             style="enable-background:new 0 0 48 48;" xml:space="preserve">
                                <switch>
                                    <g id="Calque_1">
                                        <path d="M9.73,15.72c0.31-1.93,0.64-3.8,0.92-5.67c0.42-2.8,2.07-4.28,4.91-4.35c0.77-0.02,1.55,0.03,2.32-0.05
				c0.27-0.03,0.63-0.25,0.76-0.49c0.34-0.61,0.83-0.93,1.51-0.93c2.27-0.01,4.55-0.01,6.82,0c0.74,0,1.27,0.31,1.62,1
				c0.11,0.22,0.47,0.42,0.72,0.43c0.85,0.05,1.7,0,2.55,0.01c2.16,0.02,4.12,1.64,4.49,3.75c-0.48,0.1-0.96,0.2-1.49,0.31
				c-0.08-0.18-0.15-0.35-0.23-0.53c-0.55-1.2-1.47-1.87-2.81-1.89c-0.67-0.01-1.35,0.02-2.02-0.01c-0.65-0.03-1.18,0.01-1.58,0.67
				c-0.17,0.28-0.73,0.46-1.11,0.47c-2.32,0.04-4.65,0.02-6.97,0.02c-0.6,0-1.03-0.26-1.38-0.75c-0.14-0.2-0.46-0.37-0.71-0.38
				c-0.95-0.04-1.9-0.04-2.85-0.01c-1.32,0.04-2.47,0.87-2.74,2.15c-0.42,2.02-0.71,4.07-1.07,6.23c6.04,0,12,0,18.02,0
				c-0.31,1.87-0.19,3.61,0.77,5.16c0.53,0.85,1.3,1.55,1.93,2.35c0.21,0.27,0.43,0.61,0.45,0.93c0.06,0.97,0.02,1.95,0.02,2.92
				c0.01,1.07,0.3,1.36,1.4,1.36c1.42,0,2.85,0,4.27,0c0.91,0,1.13-0.19,1.31-1.09c0.14-0.74,0.28-1.47,0.37-2.22
				c0.06-0.49,0.23-0.81,0.72-1.02c0.47-0.2,0.89-0.53,1.44-0.86c-0.24,1.45-0.46,2.79-0.69,4.14c-0.39,2.27-0.77,4.53-1.17,6.79
				c-0.26,1.48-0.85,2.82-1.87,3.94c-1.08,1.18-2.41,1.8-4.04,1.8c-7.02-0.02-14.05-0.04-21.07,0.01c-2.73,0.02-4.58-1.25-5.58-3.63
				c-0.61-1.45-0.86-3.07-1.14-4.63c-0.71-3.91-1.34-7.83-2.02-11.74c-0.05-0.28-0.19-0.56-0.36-0.79
				c-0.52-0.71-0.66-1.45-0.26-2.25c0.4-0.79,1.06-1.16,1.94-1.15C7.09,15.73,8.39,15.72,9.73,15.72z M19.32,37.61
				c0.72,0,1.45,0.01,2.17,0c0.75-0.01,1.14-0.34,1.15-1.07c0.03-1.6,0.03-3.19,0-4.79c-0.02-0.66-0.38-1.04-1.11-1.03
				c-1.5,0.02-2.99,0.02-4.49,0c-0.73-0.01-1.1,0.37-1.11,1.02c-0.04,1.6-0.03,3.19,0,4.79c0.01,0.73,0.4,1.06,1.15,1.07
				C17.83,37.62,18.58,37.61,19.32,37.61z M10.55,21.73c-0.82,0-1.65,0-2.47,0c-0.93,0.01-1.34,0.43-1.2,1.36
				c0.22,1.48,0.49,2.95,0.75,4.43c0.1,0.6,0.44,0.92,1.08,0.91c1.45-0.01,2.9-0.01,4.34,0c0.68,0,1.04-0.38,1.06-1
				c0.03-1.57,0.04-3.14,0-4.72c-0.02-0.62-0.38-1-1.07-0.98C12.2,21.75,11.37,21.73,10.55,21.73z M19.33,21.7
				c-0.77,0-1.55,0.01-2.32,0c-0.72-0.01-1.09,0.39-1.1,1.05c-0.03,1.55-0.03,3.1,0,4.64c0.01,0.66,0.37,1.08,1.08,1.08
				c1.52,0,3.05,0,4.57,0c0.7,0,1.11-0.38,1.12-1.04c0.02-1.57,0-3.15-0.05-4.72c-0.02-0.65-0.37-1.05-1.11-1.02
				C20.78,21.73,20.05,21.7,19.33,21.7z M30.76,34.15c0-0.75,0.02-1.5,0-2.25c-0.02-0.84-0.36-1.16-1.2-1.17
				c-1.3-0.01-2.59-0.01-3.89,0c-0.85,0-1.19,0.32-1.2,1.16c-0.02,1.5-0.02,2.99,0,4.49c0.01,0.88,0.37,1.22,1.23,1.22
				c1.27,0.01,2.54,0.01,3.82,0c0.87-0.01,1.22-0.34,1.24-1.22C30.77,35.64,30.76,34.89,30.76,34.15z M30.79,25.1
				C30.79,25.1,30.79,25.1,30.79,25.1c0-0.62,0.01-1.25,0-1.87c-0.01-1.22-0.35-1.54-1.57-1.52c-1.2,0.01-2.4,0.02-3.59,0.01
				c-0.75-0.01-1.14,0.29-1.15,1.05c-0.04,1.52-0.05,3.04-0.03,4.56c0.01,0.78,0.4,1.14,1.17,1.14c1.32,0.01,2.65,0.01,3.97,0
				c0.82-0.01,1.17-0.36,1.2-1.19C30.8,26.55,30.79,25.83,30.79,25.1z M32.56,34.13c0,0.77-0.01,1.55,0,2.32
				c0.01,0.57,0.21,1.03,0.85,1.15c1.69,0.32,3.26-0.36,4.22-1.8c0.8-1.21,0.99-2.6,1.1-3.99c0.06-0.72-0.36-1.06-1.12-1.07
				c-1.27-0.01-2.54-0.01-3.82,0c-0.88,0.01-1.2,0.32-1.22,1.22C32.54,32.68,32.56,33.4,32.56,34.13z M14.12,34.22
				c0-0.77,0.02-1.55,0-2.32c-0.02-0.85-0.35-1.17-1.19-1.17c-1.12-0.01-2.24-0.01-3.36,0c-0.86,0.01-1.24,0.39-1.16,1.26
				c0.14,1.55,0.63,2.97,1.7,4.14c0.73,0.8,1.61,1.32,2.71,1.44c0.84,0.1,1.27-0.25,1.3-1.11C14.14,35.72,14.12,34.97,14.12,34.22z
				 M9.43,17.8c-0.01,0.57,0.41,1.01,0.98,1c0.59-0.01,0.92-0.35,0.99-0.92c0.06-0.53-0.41-1.03-0.94-1.05
				C9.9,16.8,9.44,17.24,9.43,17.8z"/>
                                        <path d="M37.03,10.78c3.55-0.01,6.45,2.85,6.47,6.4c0.02,3.58-2.88,6.5-6.45,6.52c-3.57,0.01-6.46-2.92-6.47-6.58
				C30.56,13.67,33.49,10.79,37.03,10.78z M37.61,17.78c1.1,0,2.12,0,3.14,0c0.43,0,0.88-0.02,0.87-0.57c0-0.54-0.45-0.57-0.88-0.56
				c-1.02,0.01-2.04,0-3.14,0c0-1.09,0-2.11,0-3.13c0-0.44-0.1-0.89-0.61-0.81c-0.22,0.04-0.49,0.52-0.51,0.82
				c-0.06,1.01-0.02,2.03-0.02,3.12c-0.31,0-0.52,0-0.74,0c-0.87,0-1.75-0.04-2.62,0.03c-0.24,0.02-0.45,0.34-0.68,0.53
				c0.22,0.19,0.41,0.44,0.66,0.55c0.21,0.09,0.49,0.02,0.74,0.02c0.86,0,1.73,0,2.64,0c0,1.17-0.04,2.22,0.03,3.26
				c0.02,0.25,0.37,0.47,0.56,0.71c0.18-0.23,0.41-0.43,0.53-0.69c0.09-0.19,0.02-0.44,0.02-0.67
				C37.61,19.56,37.61,18.71,37.61,17.78z"/>
                                        <path class="st0" d="M31.51,19.81"/>
                                    </g>
                                </switch>
</svg>
                    </button>
                @endif

            </form>

        </div>
    </div>
    <div class="absolute bg-gray-800 border-2 border-yellow-500 h-24 w-24 rounded-full -top-5 -right-5 z-20
            flex justify-center items-center text-white">
        <p class="text-2xl">{{ $item->price }}€</p>
    </div>
</div>
