<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content... -->
</head>

<body class="sub_page">

    <div class="hero_area">
        <header class="header_section">
            <div class="container">
                <!-- Navbar content... -->
            </div>
        </header>
    </div>

    <section class="bg-white">
        <div class="container mx-auto my-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-semibold">Masuk</h2>
                <p>Silakan lengkapi formulir di bawah untuk dapat masuk ke website.</p>
            </div>

            <div class="flex items-center justify-center">
                <form action="/sesi/login" class="w-1/2 space-y-4 text-sm" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email address"
                            class="w-full rounded-lg border border-gray-200 p-3" required autofocus
                            autocomplete="username" />
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="w-full rounded-lg border border-gray-200 p-3" required
                            autocomplete="current-password" />
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="block w-full text-center mb-3 rounded-lg border border-gray-200 p-3 text-gray-600 cursor-pointer hover:border-black">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Info section... -->

    <!-- Footer section... -->

    <!-- Include Vue.js and other scripts... -->

</body>

</html>
