<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Landing Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #6a11cb, #2575fc);
            color: white;
            overflow-x: hidden;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(0, 0, 0, 0.5);
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        .hero h2 {
            font-size: 3rem;
            margin: 0 0 20px;
            animation: fadeIn 2s ease-in-out;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .hero button {
            padding: 15px 30px;
            font-size: 1.2rem;
            color: white;
            background-color: #6a11cb;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .hero button:hover {
            background-color: #2575fc;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .features {
            display: flex;
            justify-content: space-around;
            padding: 50px;
            background: white;
            color: black;
            text-align: center;
        }
        .feature {
            max-width: 300px;
        }
        .feature img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }
        .feature h3 {
            margin-bottom: 10px;
        }
        footer {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>InteractivePage</h1>
        <nav>
            <ul>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>
    <div class="hero">
        <h2>Welcome to the Future</h2>
        <p>Your journey to innovation starts here.</p>
        <button id="learnMore">Learn More</button>
    </div>
    <section class="features" id="features">
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 1">
            <h3>Fast</h3>
            <p>Experience blazing fast performance like never before.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 2">
            <h3>Secure</h3>
            <p>Your data is safe with state-of-the-art security.</p>
        </div>
        <div class="feature">
            <img src="https://via.placeholder.com/100" alt="Feature 3">
            <h3>Scalable</h3>
            <p>Grow your business without limits.</p>
        </div>
    </section>
    <footer id="contact">
        <p>&copy; 2024 InteractivePage. All rights reserved.</p>
    </footer>
    <script>
        document.getElementById('learnMore').addEventListener('click', function () {
            alert('Thank you for your interest! Scroll down to see more.');
            window.scrollTo({ top: document.getElementById('features').offsetTop, behavior: 'smooth' });
        });
    </script>
</body>
</html>
