<?php require_once 'app/views/templates/header.php' ?>
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="mb-8 text-center lg:text-left">
        <h1 class="text-4xl font-bold text-gray-800">
            Hey 👋 <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?>
        </h1>

        <p class="text-lg text-gray-600 mt-2"><?= date("F jS, Y"); ?></p>
    </div>

    <div class="text-center lg:text-left">
        <a href="/logout" 
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-7 rounded-lg shadow-md 
                  transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Logout
        </a>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php' ?>
