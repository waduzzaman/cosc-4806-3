<?php require_once 'app/views/templates/header.php' ?>

<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">My Portfolio</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project Card 1 -->
        <div class="card bg-base-100 shadow-xl">
            <figure><img src="/images/project1.png" alt="Project 1" class="rounded-t-lg" /></figure>
            <div class="card-body">
                <h2 class="card-title">Project One</h2>
                <p>A responsive e-commerce website built with React and Node.js.</p>
                <div class="card-actions justify-end">
                    <a href="#" target="_blank" class="btn btn-primary btn-sm">View Code</a>
                    <a href="https://top-tourism-management.netlify.app/" target="_blank" class="btn btn-secondary btn-sm">Live Demo</a>
                </div>
            </div>
        </div>

        <!-- Project Card 2 -->
        <div class="card bg-base-100 shadow-xl">
            <figure><img src="/images/project2.png" alt="Project 2" class="rounded-t-lg" /></figure>
            <div class="card-body">
                <h2 class="card-title">Project Two</h2>
                <p>A blogging platform with user authentication and content management.</p>
                <div class="card-actions justify-end">
                    <a href="#" target="_blank" class="btn btn-primary btn-sm">View Code</a>
                    <a href="https://community-library-d20f8.web.app/" target="_blank" class="btn btn-secondary btn-sm">Live Demo</a>
                </div>
            </div>
        </div>

        <!-- Project Card 3 -->
        <div class="card bg-base-100 shadow-xl">
            <figure><img src="/images/project3.png" alt="Project 3" class="rounded-t-lg" /></figure>
            <div class="card-body">
                <h2 class="card-title">Project Three</h2>
                <p>A social media app with real-time chat features built with Firebase.</p>
                <div class="card-actions justify-end">
                    <a href="https://github.com/waduzzaman/ak-marketings" target="_blank" class="btn btn-primary btn-sm">View Code</a>
                    <a href="https://www.akmarketings.com/" target="_blank" class="btn btn-secondary btn-sm">Live Demo</a>
                </div>
            </div>
        </div>

       
    </div>
</div>

<?php require_once 'app/views/templates/footer.php' ?>
