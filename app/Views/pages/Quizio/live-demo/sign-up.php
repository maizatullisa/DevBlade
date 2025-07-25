<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from softivuslab.com/html/quizio/live-demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2025 05:04:15 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="manifest" href="manifest.json" />
    <title>Sign Up - Quizio PWA HTML Template</title>
  <link href="style.css" rel="stylesheet"></head>
  <body class="">
    <div
      class="container min-h-dvh relative overflow-hidden py-8 px-6 dark:text-white dark:bg-color1"
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
      <div class="flex justify-start items-center gap-4 relative z-10">
        <a
          href="index-2.html"
          class="bg-white p-2 rounded-full flex justify-center items-center text-xl dark:bg-color10"
        >
          <i class="ph ph-caret-left"></i>
        </a>
        <h2 class="text-2xl font-semibold text-white">Sign Up</h2>
      </div>
      <!-- Page Title End -->

      <!-- Sign In Form Start -->
      <form action="#" class="relative z-20">
        <div class="bg-white py-8 px-6 rounded-xl mt-12 dark:bg-color10">
          <div class="flex justify-between items-center">
            <a
              href="sign-in.html"
              class="text-center text-xl font-semibold text-bgColor18 border-b-2 pb-2 border-bgColor18 w-full dark:text-color18 dark:border-color18"
              >Sign In</a
            >
            <a
              href="sign-up.html"
              class="text-center text-xl font-semibold text-p2 border-b-2 pb-2 border-p2 w-full dark:text-p1 dark:border-p1"
              >Sign Up</a
            >
          </div>
          <div class="pt-8">
            <p class="text-sm font-semibold pb-2">First Name</p>
            <div
              class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
            >
              <input
                type="text"
                placeholder="Enter Name"
                class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
              />
              <i class="ph ph-user text-xl text-bgColor18 !leading-none"></i>
            </div>
          </div>

          <div class="pt-4">
            <p class="text-sm font-semibold pb-2">Email</p>
            <div
              class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
            >
              <input
                type="text"
                placeholder="Enter Email"
                class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18"
              />
              <i
                class="ph ph-envelope-simple text-xl text-bgColor18 !leading-none"
              ></i>
            </div>
          </div>
          <div class="pt-4">
            <p class="text-sm font-semibold pb-2">Password</p>
            <div
              class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
            >
              <input
                type="password"
                placeholder="*****"
                class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18 passwordField"
              />
              <i
                class="ph ph-eye-slash text-xl text-bgColor18 !leading-none passowordShow cursor-pointer dark:text-color18"
              ></i>
            </div>
          </div>
          <div class="pt-4">
            <p class="text-sm font-semibold pb-2">Confirm Password</p>
            <div
              class="flex justify-between items-center py-3 px-4 border border-color21 rounded-xl dark:border-color18 gap-3"
            >
              <input
                type="password"
                placeholder="*****"
                class="outline-none bg-transparent text-n600 text-sm placeholder:text-sm w-full placeholder:text-bgColor18 dark:text-color18 dark:placeholder:text-color18 confirmPasswordField"
              />
              <i
                class="ph ph-eye-slash text-xl text-bgColor18 !leading-none confirmPasswordShow cursor-pointer dark:text-color18"
              ></i>
            </div>
          </div>
          <div class="pt-4">
            <p class="text-sm font-semibold pb-2">Choose Gender</p>
            <div
              class="flex justify-between items-center gap-3 text-bgColor18 text-sm"
            >
              <div
                class="py-3 px-4 border border-color21 rounded-xl w-full dark:border-color18"
              >
                <label
                  for="male"
                  class="flex justify-start items-center gap-2 cursor-pointer dark:text-color18"
                >
                  <input
                    id="male"
                    class="peer/male hidden"
                    type="radio"
                    name="status"
                    checked
                  />

                  <span
                    class="border border-color21 size-7 rounded-full flex justify-center items-center !leading-none text-white peer-checked/male:bg-p2 dark:border-color24 peer-checked/male:border-p2"
                  >
                    <i class="ph ph-check"></i>
                  </span>
                  Male
                </label>
              </div>

              <div
                class="py-3 px-4 border border-color21 rounded-xl w-full dark:border-color18"
              >
                <label
                  for="female"
                  class="flex justify-start items-center gap-2 cursor-pointer dark:text-color18"
                >
                  <input
                    id="female"
                    class="peer/female hidden"
                    type="radio"
                    name="status"
                  />

                  <span
                    class="border border-color21 size-7 rounded-full flex justify-center items-center !leading-none text-white peer-checked/female:bg-p2 dark:border-color24 peer-checked/female:border-p2"
                  >
                    <i class="ph ph-check"></i>
                  </span>
                  Female</label
                >
              </div>
            </div>
          </div>
          <div class="pt-4">
            <label
              for="checkbox"
              class="flex justify-start items-center gap-3 text-sm cursor-pointer"
            >
              <input
                type="checkbox"
                name="checkbox"
                id="checkbox"
                class="peer hidden"
              />
              <span
                class="border border-color21 size-7 rounded-full flex justify-center items-center !leading-none text-white peer-checked:bg-p2 dark:border-color24"
              >
                <i class="ph ph-check"></i>
              </span>
              I accept to all Term, Privacy and Fees
            </label>
          </div>
        </div>

        <a
          href="signup-successfully.html"
          class="bg-p2 rounded-full py-3 text-white text-sm font-semibold text-center block mt-12 dark:bg-p1"
          >Sign Up</a
        >
      </form>
      <div class="relative z-10">
        <div class="flex justify-center items-center my-8 gap-2">
          <div class="border-b border-color21 w-full dark:border-color18"></div>
          <p class="text-sm text-color1 text-nowrap dark:text-white">
            Or Continue With
          </p>
          <div class="border-b border-color21 w-full dark:border-color18"></div>
        </div>
        <div class="flex flex-col gap-4">
          <button
            class="flex justify-center items-center gap-3 py-3 border border-color21 text-sm font-semibold rounded-full bg-white dark:bg-color11 dark:border-color21"
          >
            <img src="assets/images/google.png" alt="" />
            <p>Continue With</p>
          </button>
          <button
            class="flex justify-center items-center gap-3 py-3 border border-color21 text-sm font-semibold rounded-full bg-white dark:bg-color11 dark:border-color21"
          >
            <img src="assets/images/AppleLogo.png" alt="" />
            <p>Continue With</p>
          </button>
        </div>

        <p class="text-sm font-semibold text-center pt-5">
          Already have an account?
          <a href="sign-in.html" class="text-p2 dark:text-p1">Sign In</a> here
        </p>
      </div>
      <!-- Sign In Form End -->
    </div>

    <!-- Javascript Dependencies -->
    <script src="assets/js/main.js"></script>
  <script defer src="index.js"></script></body>

<!-- Mirrored from softivuslab.com/html/quizio/live-demo/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2025 05:04:16 GMT -->
</html>
