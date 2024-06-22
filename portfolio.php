<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ramandeep Singh's Website">
    <title>Ramandeep Singh Makkar</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body class="bg-gray-100">
    <div id="welcome-section" class="w-full bg-cover h-screen cover">
        <nav id="navbar" class="flex flex-col md:flex-row items-center bg-transparent p-4 justify-between">
            <div class="w-full md:w-auto flex flex-col md:flex-row">
                <a href="#about-me" class="block mt-4 md:mt-0 text-white hover:text-white mr-4 menu-link">About Me</a>
                <a href="#portfolio" class="block mt-4 md:mt-0 text-white hover:text-white mr-4 menu-link">Portfolio</a>
                <a href="#experience" class="block mt-4 md:mt-0 text-white hover:text-white mr-4 menu-link">Experience</a>
                <a href="#tech" class="block mt-4 md:mt-0 text-white hover:text-white mr-4 menu-link">Tech</a>
                <a href="#education" class="block mt-4 md:mt-0 text-white hover:text-white menu-link">Education</a>
            </div>
        </nav>

        <div class="flex flex-col content-center h-screen bg-transparent text-center">
            <div class="self-center w-40 h-40 rounded-full bg-blue-500 mx-auto">
                <img src="myphoto.jpg" class="rounded-full w-full h-auto" alt="photo">
            </div>
        </div>
    </div>

    <div id="about-me" class="w-full bg-gray-100 h-auto text-center">
        <h2 class="py-16 text-3xl">ABOUT ME</h2>
        <p class="px-8 pb-16 md:px-20">
            I'm Ramandeep Singh Makkar, currently pursuing B.Tech in Computer Science and Engineering at JUIT, Solan.
        </p>
    </div>

    <div id="portfolio" class="w-full h-auto bg-gray-100 text-center p-4 pb-12">
        <h2 class="font-semibold text-xl py-4">PORTFOLIO</h2>
        <div class="flex flex-wrap justify-center">
            <div class="max-w-sm overflow-hidden shadow-2xl bg-white my-4 md:w-1/4 md:mx-2 rounded">
                <div class="px-6 py-4">
                    <div class="font-semibold text-xl mb-2">
                        <a href="" class="hover:underline" target="_blank" rel="noopener noreferrer">Rain Fall Prediction <br>(Jan 2024-Present)</a>
                    </div>
                    <p class="text-gray-700 text-base">
                        A model using many Machine Learning Algorithms.
                        <br> Used XG Boost, KNN, Random Forest, SVM, Logistic Regression to predict the rainfall.
                        <br> Got the highest accuracy of 0.86.
                    </p>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-2xl bg-white my-4 md:w-1/4 md:mx-2 rounded">
                <div class="px-6 py-4">
                    <div class="font-semibold text-xl mb-2">Quiz Application</div>
                    <p class="text-gray-700 text-base">
                        A basic quiz made using Java Servlets and MySQL as database. The quiz consists of 15 unique and randomly selected questions from a pool of 150 questions.
                    </p>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-2xl bg-white my-4 md:w-1/4 md:mx-2 rounded">
                <div class="px-6 py-4">
                    <div class="font-semibold text-xl mb-2">Personal Webpage</div>
                    <p class="text-gray-700 text-base">
                        My own responsive personal webpage showing my skills, projects, education and GitHub and LinkedIn links.
                    </p>
                </div>
            </div>

            
            <div class="max-w-sm overflow-hidden shadow-2xl bg-white my-4 md:w-1/4 md:mx-2 rounded view-more" style="display: none;">
                <div class="px-6 py-4">
                    <div class="font-semibold text-xl mb-2"> Stopwatch</div>
                    <p class="text-gray-700 text-base">
                    A basic stopwatch made using HTML, CSS, and JavaScript.
                    </p>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-2xl bg-white my-4 md:w-1/4 md:mx-2 rounded view-more" style="display: none;">
                <div class="px-6 py-4">
                    <div class="font-semibold text-xl mb-2">TIC TAC TOE GAME</div>
                    <p class="text-gray-700 text-base">
                    A basic TIC TAC TOE game
                    </p>
                </div>
            </div>
            <div class="max-w-sm overflow-hidden shadow-2xl bg-white my-4 md:w-1/4 md:mx-2 rounded view-more" style="display: none;">
                <div class="px-6 py-4">
                    <div class="font-semibold text-xl mb-2"> Coin Toss</div>
                    <p class="text-gray-700 text-base">
                        Coin Toss where the coin revolving animation is there
                    </p>
                </div>
            </div>
        </div>
        <button id="view-projects" class="bg-transparent hover:bg-blue-500 text-xs text-blue-700 hover:text-white py-2 px-8 my-4 border-2 border-blue-500 hover:border-transparent" onclick="setVisibility()">VIEW MORE</button>
    </div>

    <div id="experience" class="w-full bg-gray-100 h-auto text-center md:content-center py-12 px-4">
        <h2 class="font-semibold text-xl">EXPERIENCE</h2>
        <div class="md:w-1/2 md:mx-auto">
            <p class="m-2">Where I have worked in my College:</p>
            <div class="text-left py-8 flex content-between border-b border-gray-400">
                <div class="w-full">
                    <span class="block font-bold">SIAM JUIT</span>
                    <span class="block text-sm mt-3">Senior Member</span>
                </div>
                
                <div class="w-full text-center">
                    <span class="text-sm">March 2023 - PRESENT</span>
                </div>
            
                <div class="w-full">
                    <span class="block font-bold">JYC</span>
                    <span class="block text-sm mt-3">Senior Member</span>
                </div>
                <div class="w-full text-center">
                    <span class="text-sm">September 2022 - PRESENT</span>
                </div>
            </div>
        </div>
    </div>

    <div id="tech" class="w-full bg-gray-100 h-auto text-center md:content-center py-12 px-6">
        <h2 class="font-semibold text-xl">TECH</h2>
        <div class="md:w-1/2 md:mx-auto">
            <p class="m-2">Technologies / Tools I like working with.</p>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">Machine Learning</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">Python</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">C++</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">DSA</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">VS Code</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">Java</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">OpenCV</span>
            <span class="inline-block bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 m-2">GitHub</span>
        </div>
    </div>

    <div id="education" class="w-full bg-gray-100 h-auto text-center md:content-center py-12 px-6">
        <h2 class="font-semibold text-xl">EDUCATION</h2>
        <div class="md:w-1/2 md:mx-auto">
            <p class="m-2">MY Education</p>
            <div class="text-left py-8 flex content-between border-b border-gray-400">
                <div class="w-full">
                    <span class="block font-bold">B.Tech. in Computer Science & Engineering</span>
                    <span class="block text-sm mt-3">Jaypee University of Information and Technology, Solan</span>
                </div>
                <div class="w-1/2 text-center">
                    <span class="text-sm">2022 - 2026</span>
                    <br>
                    <span class="text-sm">CGPA: 9.20</span>
                </div>
            </div>
            <div class="text-left py-8 flex content-between border-b border-gray-400">
                <div class="w-full">
                    <span class="block font-bold">Class 12th</span>
                    <span class="block text-sm mt-3">Guru Teg Bahadur Public School, Faridkot, Punjab</span>
                </div>
                <div class="w-1/2 text-center">
                    <span class="text-sm">2020 - 2024</span>
                    <br>
                    <span class="text-sm">Percentage: 86</span>
                </div>
            </div>
            <div class="text-left py-8 flex content-between border-b border-gray-400">
                <div class="w-full">
                    <span class="block font-bold">Class 10th</span>
                    <span class="block text-sm mt-3">Dasmesh Public School, Faridkot, Punjab</span>
                </div>
                <div class="w-1/2 text-center">
                    <span class="text-sm">2007 - 2020</span>
                    <br>
                    <span class="text-sm">Percentage: 94.60</span>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="w-full bg-gray-100 h-auto text-center py-16">
        <h2 class="py-4 text-3xl">Contact Me</h2>
        <form action="send_message.php" method="POST" class="w-full max-w-lg mx-auto bg-white p-8 shadow-md rounded">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                <textarea id="message" name="message" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send</button>
            </div>
        </form>
    </div>

    <div class="w-auto bg-gray-200 h-auto p-6">
        <span id="name" class="text-left p-4 pl-0 md:pl-8">Developed by Ramandeep Singh Makkar (11-01-2024)</span>
        <div class="w-1/2 md:w-1/6 my-4 flex justify-around">
            <a href="mailto:ramandeepsinghmakkar199@gmail.com" aria-label="Email" class="px-4 py-1 hover:bg-gray-500" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/ramandeep-singh-makkar/" aria-label="Linkedin" class="px-4 py-1 hover:bg-gray-500" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/RamandeepSinghMakkar" aria-label="GitHub" class="px-4 py-1 hover:bg-gray-500" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        </div>
    </div>

    <button id="view-projects" onclick="setVisibility()">VIEW MORE</button>


<script src="index.js"></script>
</body>
</html>
