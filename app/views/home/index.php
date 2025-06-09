<?php 
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 1) {
    header('Location: /login');
    exit;
}
require_once 'app/views/templates/header.php';
?>

<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="mb-8 text-center lg:text-left">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">
            Welcome, <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?>! 👋
        </h1>
        <p class="text-lg text-gray-600"><?= date("F jS, Y"); ?></p>

        <p class="mt-3 text-lg text-gray-500">
            Welcome to my personal website — a place where I share my passion for web development and showcase my projects.
        </p>
        
    </div>

    <!-- <div class="mb-10 text-center lg:text-left">
        <p class="text-lg text-gray-700 leading-relaxed">
            I'm glad you're here! This website is a personal space where I share a bit about myself, my technical skills, and past web development projects.
            Feel free to browse the <a href="/about" class="text-blue-600 underline hover:text-blue-800">About Me</a> page to know more about me,
            or head over to the <a href="/portfolio" class="text-blue-600 underline hover:text-blue-800">Portfolio</a> to see some of my work.
        </p>
    </div> -->
<!-- 
    <div class="mb-8 text-gray-700 text-base leading-relaxed">
        <p>
            I’m a dedicated software developer with a strong focus on creating clean, efficient, and user-friendly web applications.  
            Here you’ll find examples of my previous work, insights into my development process, and resources that highlight my skills.
        </p>
        <p class="mt-4">
            Feel free to explore my <a href="/portfolio" class="text-blue-600 hover:underline">portfolio</a> to see what I’ve built,  
            learn more <a href="/about" class="text-blue-600 hover:underline">about me</a>, or get in touch if you’d like to collaborate on a project.
        </p>
    </div>

    <div class="text-center lg:text-left mt-12">
        <a href="/portfolio"
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-md shadow-md
                  transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 mr-4">
            View Portfolio
        </a>
        <a href="/contact"
           class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-3 px-8 rounded-md shadow-md
                  transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
            Contact Me
        </a>
    </div>

    <div class="text-center lg:text-left">
        <a href="/logout" 
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-7 rounded-lg shadow-md 
                  transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Logout
        </a>
    </div>
</div> -->

    <div class="mb-10 text-gray-800 text-base leading-relaxed max-w-3xl mx-auto">
        <p>
            I’m a passionate and results-driven software developer specializing in building modern, responsive, and user-centric web applications.
            This site showcases a curated selection of my previous work, along with insights into my development process and technical capabilities.
        </p>
        <p class="mt-4">
            Feel free to explore my <a href="/portfolio" class="text-indigo-600 font-medium hover:underline">portfolio</a> to see real-world examples of my work, 
            learn more <a href="/about" class="text-indigo-600 font-medium hover:underline">about me</a>, or reach out if you're interested in collaborating on a project.
        </p>
    </div>

    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 mt-10">
        <a href="/portfolio"
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-8 rounded-md shadow transition duration-300 ease-in-out 
                  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            View Portfolio
        </a>
        <a href="/contact"
           class="inline-block bg-white hover:bg-gray-100 text-gray-800 border border-gray-300 font-semibold py-3 px-8 rounded-md shadow transition duration-300 
                  ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2">
            Contact Me
        </a>
    </div>

    <div class="text-center lg:text-left mt-8">
        <a href="/logout" 
           class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 px-6 rounded-md shadow transition duration-300 
                  ease-in-out focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
            Logout
        </a>
    </div>


<?php require_once 'app/views/templates/footer.php'; ?>
