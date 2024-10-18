<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIMSI KLA | INTRO</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.min.css" integrity="sha512-jN4O0AUkRmE6Jwc8la2I5iBmS+tCDcfUd1eq8nrZIBnDKTmCp5YxxNN1/aetnAH32qT+dDbk1aGhhoaw5cJNlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  <!-- Theme style -->
  {{-- ADMIN LTE --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/tailwind-all.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/flowbite.min.css')}}">
  <link rel="shortcut icon" href="{{asset("favicon.ico")}}" type="image/x-icon">
  <link rel="apple-touch-icon" href="{{asset("apple-touch-icon.png")}}">
  <link rel="manifest" href="{{asset('manifest.json')}}">

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .active , .card-header{
      background-color: #101248 !important;
      color: white !important;
    }
    .btn-primary{
      background-color: #4449ae !important;
      
    }

    

  </style>
</head>
<body class="">
  <div class="wrapper">

    <x-navbar></x-navbar>
    {{-- @include('nav') --}}

    <!-- section pengertian divisi -->
     <section class="w-full min-h-screen px-12 flex justify-center items-center">
      <div class="w-full h-[60vh] px-40 py-6 rounded-2xl flex flex-col gap-6 justify-center items-center relative" style="background-color: #101248;">
        <div class="bg-white w-[70%] flex flex-col justify-center items-center gap-2 rounded-[30px] p-8 -translate-y-12 absolute shadow top-0">
            <div class="w-24  overflow-hidden rounded-full">
              <img src="{{ asset('assets/img/pendidikan.png') }}" alt="" class="w-full object-center object-cover">
            </div>
            <div class="flex flex-col justify-center items-center gap-2">
              <h1 class="font-bold text-2xl my-2 uppercase" style="color: #101248">Divisi Pendidikan</h1>
              <p class="text-center text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus cumque magni autem ipsum aperiam esse nam aliquid perspiciatis necessitatibus incidunt!</p>
            </div>
        </div>
        <div class="flex justify-around items-end w-full text-white h-full">
          <div class="flex flex-col justify-center items-center gap-2">
            <p class="text-5xl font-bold">0</p>
            <p class="text-2xl font-semibold capitalize">program kerja</p>
          </div>
          <div class="flex flex-col justify-center items-center gap-2">
            <p class="text-5xl font-bold">0</p>
            <p class="text-2xl font-semibold capitalize">anggota</p>
          </div>
        </div>
      </div>
     </section>

     <!-- section anggota -->
      <section class="w-full min-h-screen flex-col px-16">

        <div class="w-full h-[380px] flex gap-8 shadow rounded-2xl overflow-hidden">
          <div class="w-[50%] h-full bg-cover bg-center m-0 group cursor-pointerbg-opacity-50 relative element" style="background-image: url('{{ asset('assets/img/divisi/logo.png') }}'); ">
            <img src="{{ asset('assets/img/divisi/litbang.png') }}" alt="" class="w-full object-cover object-center h-full group-hover:hidden">
            <img src="{{ asset('assets/img/contoh.png') }}" alt="" class="transition-all ease-in-out duration-200 w-full object-cover object-center h-full z-20">
          </div>
          <div class="w-[50%] flex flex-col gap-4 justify-center align-center">
            <h1 class=" text-3xl font-bold capitalize w-full" style="color: #101248;">nickname</h1>
            <h3 class=" text-[17px] font-bold" style="color: #101248;">Koordinator divisi pendidikan</h3>
            <p class="text-sm opacity-70 font-semibold">2024 - S1 Sistem Indormasi</p>
          </div>
        </div>

        <div class="w-full h-[380px] flex gap-8 shadow rounded-2xl overflow-hidden my-14">
          <div class="w-[50%] h-full bg-cover bg-center m-0 px-14 group cursor-pointer backdrop-blur-md bg-opacity-50 relative element" style="background-image: url('{{ asset('assets/img/pendidikan.png') }}'); ">
            <img src="{{ asset('assets/img/contoh.png') }}" alt="" class="transition-all ease-in-out duration-200 w-full object-cover object-center h-full">
          </div>
          <div class="w-[50%] flex flex-col gap-4 justify-center align-center">
            <h1 class=" text-3xl font-bold capitalize w-full" style="color: #101248;">ninkname</h1>
            <h3 class=" text-[17px] font-bold" style="color: #101248;">Wakil koordinator divisi pendidikan</h3>
            <p class="text-sm opacity-70 font-semibold">2024 - S1 Sistem Indormasi</p>
          </div>
        </div>


        <div class="flex flex-wrap w-full justify-between items mb-80">

          <div class="w-[400px] flex flex-col gap-4 overflow-hidden">
            <div class="w-full bg-cover bg-center m-0 px-14 group cursor-pointer backdrop-blur-md bg-opacity-50 relative rounded-xl" style="background-image: url('{{ asset('assets/img/divisi/logo.png') }}'); ">
              <img src="{{ asset('assets/img/contoh.png') }}" alt="" class="transition-all ease-in-out duration-200 w-full object-cover object-center h-full">
            </div>
            <div class="flex flex-col gap-2">
              <h1 class="text-center text-3xl font-bold capitalize w-full" style="color: #101248;">nickname</h1>
              <h3 class="text-center text-[17px] font-bold" style="color: #101248;">Koordinator divisi pendidikan</h3>
              <p class="text-center text-sm opacity-70 font-semibold">2024 - S1 Sistem Indormasi</p>
            </div>
          </div>

          <div class="w-[400px] flex flex-col gap-4 overflow-hidden">
            <div class="w-full bg-cover bg-center m-0 px-14 group cursor-pointer backdrop-blur-md bg-opacity-50 relative " style="background-image: url('{{ asset('assets/img/pendidikan.png') }}'); ">
              <img src="{{ asset('assets/img/contoh.png') }}" alt="" class="transition-all ease-in-out duration-200 w-full object-cover object-center h-full">
            </div>
            <div class="flex flex-col gap-2">
              <h1 class="text-center text-3xl font-bold capitalize w-full" style="color: #101248;">nickname</h1>
              <h3 class="text-center text-[17px] font-bold" style="color: #101248;">Koordinator divisi pendidikan</h3>
              <p class="text-center text-sm opacity-70 font-semibold">2024 - S1 Sistem Indormasi</p>
            </div>
          </div>

        </div>

      </section>

  </div>
  <script src="{{asset('assets/js/alpine.min.js')}} " defer></script>
  <script src="{{asset('assets/js/flowbite.min.js')}} " defer></script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  {{-- Bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  {{-- Overlay Scrollbar --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js" integrity="sha512-B1xv1CqZlvaOobTbSiJWbRO2iM0iii3wQ/LWnXWJJxKfvIRRJa910sVmyZeOrvI854sLDsFCuFHh4urASj+qgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><!-- AdminLTE App -->
  {{-- ADMIN LTE --}}
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

  {{-- Jquery mouse wheel --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- jQuery Mapael -->
{{--   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mapael/2.2.0/js/jquery.mapael.min.js" integrity="sha512-+iXNzFArGbqxdmbClb1f6MKIiZASR7H8ep6rS1ZFn2I7tRX400ApvS0nsG8/v1+F7RoGU2shMDTl/gZ5lZF1iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

</body>
</html>
