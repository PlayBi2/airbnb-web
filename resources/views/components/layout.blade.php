<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    maxWidth: {
                        container: "1280px",
                    },
                    boxShadow: {
                        searchForm: "0 1px 2px rgba(0,0,0,0.08), 0 4px 12px rgba(0,0,0,0.05)",
                        searchFormHover: "0 0 0 1px rgba(0,0,0,0.18)",
                    },
                    textColor: {
                        baseColor: "#444",
                        iconColor: "#717171",
                    },
                    backgroundColor: {
                        hoverBg: "#F7F7F7",
                    },
                },
            }
        }
    </script>
    <title>Document</title>
</head>

<body>
    <x-header />
    {{ $slot }}

    <x-footer />
    <x-flash />
</body>

</html>
