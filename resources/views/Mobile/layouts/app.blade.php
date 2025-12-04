<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت</title>
    @include('Mobile.layouts.links') 
    @livewireStyles
    

    <style>
        @font-face {
        font-family: 'Yekan';
        src: url('/fonts/Yekan.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
    font-family: 'Yekan';
    src: url('/fonts/Yekan.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
</style>
</head>
<body class="flex flex-row bg-[#D9D9D933]/20 md:bg-white font-yekan ">

    
   
    <main class="flex-1 main-content-container flex justify-center items-center  lg:w-[800px] xl:w-[1500px] mt-20 ">
        @yield('content') 
    </main>
@livewireScripts
</body>
</html>


