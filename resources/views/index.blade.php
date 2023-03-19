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
    <div class="text-center space-y-3">
      <img src="https://cdn.discordapp.com/attachments/1000618381411614820/1086586434145746985/IMG_8209.jpg"
        alt="Profile Image" class="w-36 h-36 object-cover object-top rounded-full mx-auto">
      <p class="text-4xl font-semibold">Ricky Roy Nardson</p>
      <p class="text-xl">Web Developer</p>
      <a href="https://rrn.vercel.app/"
        class="inline-flex rounded-full bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 transition duration-300 font-semibold text-sm"
        target="_blank">Check
        me
        out!</a>
    </div>
  </div>
</body>

</html>
