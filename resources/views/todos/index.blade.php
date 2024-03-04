<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100..700&display=swap" rel="stylesheet">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @vite(['./resources/css/app.css'])
  <title>Todo app</title>
</head>

<body class="bg-[#E3E4F1] min-h-svh px-6 py-10 select-none font-normal text-[.75rem] sm:text-[.975rem] text-[#9495A5]">
  <main>
    <section>
      <div class="container grid gap-8 z-10 max-w-xl mx-auto">

        <div class="headline flex items-center justify-between rounded-md">
          <h1 class="text-white text-3xl tracking-[10px] font-bold uppercase">Todo</h1>
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26">
              <path fill="#FFF" fill-rule="evenodd"
                d="M13 0c.81 0 1.603.074 2.373.216C10.593 1.199 7 5.43 7 10.5 7 16.299 11.701 21 17.5 21c2.996 0 5.7-1.255 7.613-3.268C23.22 22.572 18.51 26 13 26 5.82 26 0 20.18 0 13S5.82 0 13 0z" />
            </svg>
          </button>
        </div>

        <div class="grid gap-4">

          <div class="create-task px-6 py-2 bg-white rounded-md">
            <div class="flex items-center justify-start gap-4">
              <input type="checkbox" name="checkbox" disabled>
              <input class="border-none w-full text-[#393A4B] outline-[#9495A5]" type="text" name="input-new-task"
                placeholder="Create a new todo...">
            </div>
          </div>

          <div class="bg-white px-6 py-4 rounded-lg shadow-md grid">
            <ul class="task-list list-none p-0 divide-y  divide-[#9495A5] text-[#494C6B]">

              <li class="flex items-center justify-between py-4">
                <div class="flex items-center justify-start gap-4">
                  <input class="cursor-pointer" type="checkbox" name="checkbox">
                  <p>Complete JavaScript online course</p>
                </div>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="#494C6B" fill-rule="evenodd"
                      d="M16.97 0l.708.707L9.546 8.84l8.132 8.132-.707.707-8.132-8.132-8.132 8.132L0 16.97l8.132-8.132L0 .707.707 0 8.84 8.132 16.971 0z" />
                  </svg>
                </button>
              </li>

              <li class="flex items-center justify-between py-4">
                <div class="flex items-center justify-start gap-4">
                  <input class="cursor-pointer" type="checkbox" name="checkbox">
                  <p>Jog around the park 3x</p>
                </div>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="#494C6B" fill-rule="evenodd"
                      d="M16.97 0l.708.707L9.546 8.84l8.132 8.132-.707.707-8.132-8.132-8.132 8.132L0 16.97l8.132-8.132L0 .707.707 0 8.84 8.132 16.971 0z" />
                  </svg>
                </button>


              </li>

              <li class="flex items-center justify-between py-4">
                <div class="flex items-center justify-start gap-4">
                  <input class="cursor-pointer" type="checkbox" name="checkbox">
                  <p>10 minutes meditation</p>
                </div>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="#494C6B" fill-rule="evenodd"
                      d="M16.97 0l.708.707L9.546 8.84l8.132 8.132-.707.707-8.132-8.132-8.132 8.132L0 16.97l8.132-8.132L0 .707.707 0 8.84 8.132 16.971 0z" />
                  </svg>
                </button>

              </li>

              <li class="flex items-center justify-between py-4">
                <div class="flex items-center justify-start gap-4">
                  <input class="cursor-pointer" type="checkbox" name="checkbox">
                  <p>Read for 1 hour</p>
                </div>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="#494C6B" fill-rule="evenodd"
                      d="M16.97 0l.708.707L9.546 8.84l8.132 8.132-.707.707-8.132-8.132-8.132 8.132L0 16.97l8.132-8.132L0 .707.707 0 8.84 8.132 16.971 0z" />
                  </svg>
                </button>

              </li>

              <li class="flex items-center justify-between py-4">
                <div class="flex items-center justify-start gap-4">
                  <input class="cursor-pointer" type="checkbox" name="checkbox">
                  <p>Pick up groceries</p>
                </div>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="#494C6B" fill-rule="evenodd"
                      d="M16.97 0l.708.707L9.546 8.84l8.132 8.132-.707.707-8.132-8.132-8.132 8.132L0 16.97l8.132-8.132L0 .707.707 0 8.84 8.132 16.971 0z" />
                  </svg>
                </button>

              </li>

              <li class="flex items-center justify-between py-4">
                <div class="flex items-center justify-start gap-4">
                  <input class="cursor-pointer" type="checkbox" name="checkbox">
                  <p>Complete Todo App</p>
                </div>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                    <path fill="#494C6B" fill-rule="evenodd"
                      d="M16.97 0l.708.707L9.546 8.84l8.132 8.132-.707.707-8.132-8.132-8.132 8.132L0 16.97l8.132-8.132L0 .707.707 0 8.84 8.132 16.971 0z" />
                  </svg>
                </button>

              </li>

            </ul>

            <div class="bg-white py-4 flex items-center justify-between">
              <div>
                <p class="hover:text-[#494C6B]"> <!-- Add dynamic number --> items left</p>
              </div>

              <div>
                <p class="hover:text-[#494C6B]"> Clear Completed</p>
              </div>
            </div>

          </div>

          <div class="bg-white flex items-center justify-center py-4 shadow-md rounded-md">
            <div class="flex items-center gap-5 font-semibold">
              <button class="bg-transparent text-sm cursor-pointer hover:text-[#494C6B]">All</button>
              <button class="bg-transparent text-sm cursor-pointer hover:text-[#494C6B]">Active</button>
              <button class="bg-transparent text-sm cursor-pointer hover:text-[#494C6B]">Completed</button>
            </div>
          </div>

        </div>

        <div class="text-center">
          <p>Drag and drop to reorder list</p>
        </div>
      </div>
    </section>
  </main>

</body>

</html>