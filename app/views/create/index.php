<?php require_once 'app/views/templates/header.php'; ?>

<div class="max-w-md mx-auto mt-12 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Create New User</h2>

    <form action="/create/store" method="POST" class="space-y-5">
        <div>
            <label for="username" class="block mb-1 font-medium text-gray-700">Username</label>
            <input type="text" name="username" id="username" required
                class="input input-bordered w-full" placeholder="Enter username" />
        </div>

        <div>
            <label for="email" class="block mb-1 font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" required
                class="input input-bordered w-full" placeholder="Enter email" />
        </div>

        <div>
            <label for="password" class="block mb-1 font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                class="input input-bordered w-full" placeholder="Enter password" />
        </div>

        <button type="submit" 
            class="btn btn-primary w-full mt-4">
            Create User
        </button>
    </form>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
