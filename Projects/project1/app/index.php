<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body class="px-10 list-none">
    <section class=" flex justify-between py-4">
        <div class="font-bold flex items-center text-3xl">
            mattered
        </div>
        <nav class="flex gap-2 px-4 py-2 gap-x-5">
            <a class="cursor-pointer">Services</a>
            <a class="cursor-pointer">Work</a>
            <a class="cursor-pointer">Insights</a>
            <a class="cursor-pointer">Contact</a>
        </nav>
    </section>
    <hr>
    <section class="px-36">
        <h2 class="flex flex-wrap text-3xl py-10 cursor-pointer">
            Love to hear from you, <br />
            Get in touch 👋
        </h2>
        <form action="" method="post" class="grid grid-cols-2 gap-x-2">
            <div class="flex flex-col my-2 gap-x-2">
                <label for="name" class="font-semibold my-2">Your name</label>
                <input type="text" class="bg-slate-100 p-2 outline-0 focus:border focus:border-1 focus:border-black" placeholder="John Doe" id="name">
            </div>
            <div class="flex flex-col my-2 gap-x-2">
                <label for="name" class="font-semibold my-2">Your email</label>
                <input type="email" class="bg-slate-100 p-2 outline-0 focus:border focus:border-1 focus:border-black"
                    placeholder="johndoe@gmail.com" id="email">
            </div>
            <div class="flex flex-col my-2 gap-x-2">
                <label for="name" class="font-semibold my-2">What are your interest is</label>
                <input type="email" class="bg-slate-100 p-2 outline-0 focus:border focus:border-1 focus:border-black"
                    placeholder="johndoe@gmail.com" id="interest">
            </div>
            <div class="flex flex-col my-2 gap-x-2">
                <label for="budget" class="font-semibold my-2">budget</label>
                <input type="text" class="bg-slate-100 p-2 outline-0 focus:border focus:border-1 focus:border-black"
                    placeholder="$100 - $400" id="budget">
            </div>
            <div class="flex flex-col col-span-2 my-2 gap-x-2">
                <label for="name" class="font-semibold my-2">What are your interest is</label>
                <textarea type="text" class="bg-slate-100 p-2 outline-0 focus:border focus:border-1 focus:border-black"
                    placeholder="Tell us what your project is about" id="interest" rows="6" cols="50">
                </textarea>
            </div>
            <div class="col-span-2">
                <button class="py-2 px-10 bg-stone-700 text-white text-sm mt-5 w-96">
                    Send
                </button>
            </div>


        </form>



    </section>


</body>

</html>