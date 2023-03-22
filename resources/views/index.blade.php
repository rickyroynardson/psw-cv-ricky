<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@rickyroynardson</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="w-screen h-screen flex items-center justify-center">
    <div class="flex flex-col md:flex-row items-center gap-10">
      <div class="text-center space-y-3">
        <img src="https://cdn.discordapp.com/attachments/1000618381411614820/1086586434145746985/IMG_8209.jpg"
          alt="Profile Image" class="w-32 h-32 md:w-24 md:h-24 object-cover object-top rounded-full mx-auto">
        <p class="text-4xl md:text-3xl font-semibold">Ricky Roy Nardson</p>
        <p class="text-xl md:text-lg">Web Developer</p>
      </div>
      <div class="w-80 lg:w-96 space-y-4 border-l-2 pl-10 border-slate-300">
        <p class="text-3xl font-semibold lg:text-4xl">About Me</p>
        <p class="lg:text-md">Hello, my name is Ricky Roy Nardson. I'm currently 18 years old. I live in Batam City, Riau Islands. I was someone who has been interested in the world of computers and technology. I started learning programming since 1st grade of vocational school, in 2019. Since then, i gradually improve my skill until now and will keep improving in the future and always learn new things.</p>
        <a href="https://rrn.vercel.app/"
          class="inline-flex rounded-full bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 transition duration-300 font-semibold text-sm"
          target="_blank">Check
          me
          out!</a>
      </div>
    </div>
  </div>
</body>

</html>
