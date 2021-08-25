<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out </title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <!-- Tailwind CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
</head>
<body>
    <div class="container px-6 mx-auto grid mt-16">
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-center text-capitalize text-gray-600 dark:text-gray-300">
                Log Out !!!
            </h4>
            <p class="text-sm mb-6 text-gray-600 dark:text-gray-400">
                Do you wish to logout from your profile??
            </p>
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-2">
                <button class="flex items-center p-4 bg-teal rounded-lg shadow-xs dark:bg-gray-800" onclick="yes()">
                    <div class="text-teal-500 rounded-full dark:text-teal-100 dark:bg-teal-500">       
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Yes</span>
                    </div>
                </button>
                <a href="./" class="flex items-center p-4 bg-white bg-orange-100 rounded-lg shadow-xs dark:bg-gray-800"> 
                    <div class="text-orange-500 text-center rounded-full dark:text-orange-100 dark:bg-orange-500">
                        <span class="text-sm text-center font-medium text-gray-600 dark:text-gray-400">No</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script>
        yes=()=>{
            localStorage.mail="";
            location.href = "../../";
        }
    </script>
</body>
</html>