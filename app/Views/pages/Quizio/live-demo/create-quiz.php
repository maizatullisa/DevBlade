<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from softivuslab.com/html/quizio/live-demo/create-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2025 05:04:43 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/logo.png"
      type="image/x-icon"
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="manifest" href="manifest.json" />
    <title>Create Quiz - Quizio PWA HTML Template</title>
  <link href="style.css" rel="stylesheet"></head>
  <body class="">
    <div
      class="container min-h-dvh relative overflow-hidden py-8 dark:text-white z-10 dark:bg-color1"
    >
      <!-- Absolute Items Start -->
      <img
        src="assets/images/header-bg-2.png"
        alt=""
        class="absolute top-0 left-0 right-0 -mt-6"
      />
      <div
        class="absolute top-0 left-0 bg-p3 blur-[145px] h-[174px] w-[149px]"
      ></div>
      <div
        class="absolute top-40 right-0 bg-[#0ABAC9] blur-[150px] h-[174px] w-[91px]"
      ></div>
      <div
        class="absolute top-80 right-40 bg-p2 blur-[235px] h-[205px] w-[176px]"
      ></div>
      <div
        class="absolute bottom-0 right-0 bg-p3 blur-[220px] h-[174px] w-[149px]"
      ></div>
      <!-- Absolute Items End -->

      <!-- Page Title Start -->
      <div class="relative z-30 px-6">
        <div class="flex justify-between items-center gap-4">
          <div class="flex justify-start items-center gap-4">
            <a
              href="home.html"
              class="bg-white size-8 rounded-full flex justify-center items-center text-xl dark:bg-color10"
            >
              <i class="ph ph-caret-left"></i>
            </a>
            <h2 class="text-2xl font-semibold text-white">Create Quiz</h2>
          </div>
        </div>
        <div
          class="p-6 rounded-xl bg-white dark:bg-color9 mt-12 border border-color21"
        >
          <a
            href="add-cover-image.html"
            class="mt-8 flex flex-col gap-4 justify-center items-center py-10 bg-color16 w-full rounded-xl border border-p2 dark:border-p1 dark:bg-bgColor14"
          >
            <div
              class="bg-p2 dark:bg-p1 rounded-full p-5 flex justify-center items-center"
            >
              <i class="ph ph-image text-white text-2xl !leading-none"></i>
            </div>
            <p class="text-sm font-semibold text-p2 dark:text-p1">
              Add Cover Image
            </p>
          </a>

          <div
            class="bg-color16 border border-color14 dark:bg-bgColor14 dark:border-bgColor16 mt-8 p-4 rounded-xl"
          >
            <div class="flex justify-between items-center">
              <p class="text-sm font-semibold cursor-pointer">Quiz ID:</p>

              <input
                type="text"
                placeholder="Enter Quiz Id"
                class="text-sm text-bgColor18 bg-transparent outline-none w-40"
              />
            </div>
            <div class="flex justify-between items-center pt-4">
              <p class="text-sm font-semibold">Quiz Password:</p>
              <input
                type="text"
                placeholder="Enter Quiz password"
                class="text-sm text-bgColor18 bg-transparent outline-none w-40"
              />
            </div>
          </div>
          <div class="pt-8 flex flex-col gap-4">
            <div class="">
              <p class="text-sm font-semibold pb-2">Quiz Name</p>
              <div
                class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
              >
                <input
                  type="text"
                  placeholder="Enter Quiz Name"
                  class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
                />
              </div>
            </div>
            <div class="">
              <p class="text-sm font-semibold pb-2">Question Type</p>
              <div
                class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
              >
                <input
                  type="text"
                  placeholder="Enter Question Type"
                  class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
                />
              </div>
            </div>
            <div class="">
              <p class="text-sm font-semibold pb-2">Number of Question</p>
              <div
                class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
              >
                <input
                  type="text"
                  placeholder="Enter Number of Question"
                  class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
                />
              </div>
            </div>
            <div class="">
              <p class="text-sm font-semibold pb-2">Quiz Duration</p>
              <div
                class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
              >
                <input
                  type="text"
                  placeholder="Enter Quiz Duration"
                  class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <a
            href="create-quiz-item.html"
            class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-8 dark:bg-p1"
            >Add Question</a
          >
        </div>
      </div>
    </div>
    <!-- ==== js dependencies start ==== -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from softivuslab.com/html/quizio/live-demo/create-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2025 05:04:43 GMT -->
</html>
