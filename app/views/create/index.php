<?php require_once 'app/views/templates/headerPublic.php' ?>
<main role="main" class="container mx-auto px-4 py-12 max-w-lg">
  <div class="bg-white shadow-lg rounded-lg p-8">
    <h1 class="text-3xl font-semibold mb-6 text-center text-blue-700">Create New Account</h1>

    <form action="/create/store" method="post" id="createUserForm" class="space-y-6">
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <input required type="text" name="username" id="username" placeholder="Enter username"
          class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input required type="email" name="email" id="email" placeholder="Enter email"
          class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input required type="password" name="password" id="password" placeholder="Enter password"
          class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <div>
        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input required type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password"
          class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <p id="passwordMatchMsg" class="mt-1 text-sm"></p>
      </div>

      <div>
        <button type="submit" 
          class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition-colors duration-300 font-semibold">
          Create Account
        </button>
      </div>
    </form>
  </div>

  <script>
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirm_password');
    const message = document.getElementById('passwordMatchMsg');
    const form = document.getElementById('createUserForm');

    function validatePasswords() {
      if (confirmPassword.value === "") {
        message.textContent = "";
        return true;
      }
      if (password.value === confirmPassword.value) {
        message.textContent = "Passwords match";
        message.className = "mt-1 text-sm text-green-600";
        return true;
      } else {
        message.textContent = "Passwords do not match";
        message.className = "mt-1 text-sm text-red-600";
        return false;
      }
    }

    confirmPassword.addEventListener('input', validatePasswords);
    password.addEventListener('input', validatePasswords);

    form.addEventListener('submit', function (e) {
      if (!validatePasswords()) {
        e.preventDefault();
        confirmPassword.focus();
      }
    });
  </script>
</main>
<?php require_once 'app/views/templates/footer.php' ?>
