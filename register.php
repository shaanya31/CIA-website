<!-- journal.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dreamfly Online Journal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      margin: 0;
      padding: 0;
    }

    /* Website Title Styling */
    .site-title {
      text-align: center;
      background-color: #333;
      color: white;
      padding: 20px 0;
      font-size: 2.5em;
      margin: 0;
    }

    /* Header Styling */
    .header {
      position: relative;
      width: 100%;
      max-height: 500px;
      overflow: hidden;
    }
    .carousel-container {
      display: flex;
      position: relative;
      width: 100%;
    }
    .carousel-slide {
      width: 100%;
      display: none;
    }
    .carousel-slide img {
      width: 100%;
      max-height: 500px;
      object-fit: cover;
    }
    .carousel-slide.active {
      display: block;
    }
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      user-select: none;
    }
    .prev {
      left: 0;
    }
    .next {
      right: 0;
    }

    /* Journal Section */
    .journal-container {
      width: 600px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .journal-entry {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .submit-btn {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #45a049;
    }
    .entry-list {
      margin-top: 20px;
    }
    .entry-item {
      background-color: #f4f4f4;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    /* Login Section Styling */
    .login-container {
      width: 400px;
      margin: 40px auto;
      padding: 40px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    .login-btn {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
    }
    .login-btn:hover {
      background-color: #45a049;
    }
    .login-container p {
      text-align: center;
      margin-top: 20px;
    }
    .login-container p a {
      color: #4CAF50;
      text-decoration: none;
    }
    .login-container p a:hover {
      text-decoration: underline;
    }

    /* Registration Section Styling */
    .register-container {
      width: 400px;
      margin: 40px auto;
      padding: 40px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .register-btn {
      width: 100%;
      padding: 10px;
      background-color: #2196F3;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
    }
    .register-btn:hover {
      background-color: #1E88E5;
    }
  </style>
</head>
<body>

  <!-- Website Name Header -->
  <div class="site-title">
    Dreamfly Online Journal
  </div>

  <!-- Carousel Header -->
  <div class="header">
    <div class="carousel-container">
      <!-- Slide 1 -->
      <div class="carousel-slide active">
        <img src="./jrimg3.webp" alt="Slide 1">
      </div>
      <!-- Slide 2 -->
      <div class="carousel-slide">
        <img src="./jrimg1.jpg" alt="Slide 2">
      </div>
      <!-- Slide 3 -->
      <div class="carousel-slide">
        <img src="./jrimg2.webp" alt="Slide 3">
      </div>

      <!-- Navigation Arrows (Optional) -->
      <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
      <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </div>
  </div>

  <!-- Journal Entry Section -->
  <div class="journal-container">
    <h2>Write a New Entry</h2>
    <form>
      <textarea class="journal-entry" placeholder="Write your journal entry here..." rows="8"></textarea>
      <br>
      <button type="submit" class="submit-btn">Submit Entry</button>
    </form>

    <div class="entry-list">
      <h3>Your Previous Entries:</h3>
      <div class="entry-item">
        <p><strong>Entry 1:</strong> Had a great day at college today...</p>
      </div>
      <div class="entry-item">
        <p><strong>Entry 2:</strong> Feeling productive after studying...</p>
      </div>
    </div>
  </div>

  <!-- features of journal-->
    <div class= "feature-container">
      <h2> Welcomme to Dreamfly Journal!</h2>
      <p> Dreamfly is your space to write and organise your thoughts,emotions and memories. With an intutive and user-friendly platform, you can create a digital diary that is comletely private and accessible anytime, anywhere.</p>
      <ul class="feature-list">
      <li>Secure login with password protection</li>
      <li>Beautiful interface for easy journaling</li>
      <li>Track and review your past entries</li>
      <li>Accessible from any device, at any time</li>
    </ul>
  </div>
  <!-- Login Section at the Bottom -->
  <div class="login-container">
    <h2>Login to Your Journal</h2>
    <form action="/submit-login" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form>
    <p>Don't have an account? <a href="#register">Sign up</a></p>
  </div>

  <!-- Registration Section -->
  <div id="register" class="register-container">
    <h2>Create an Account</h2>
    <form action="/submit-registration" method="post">
      <div class="form-group">
        <label for="new-username">Username</label>
        <input type="text" id="new-username" name="new-username" required>
      </div>
      <div class="form-group">
        <label for="new-email">Email</label>
        <input type="email" id="new-email" name="new-email" required>
      </div>
      <div class="form-group">
        <label for="new-password">Password</label>
        <input type="password" id="new-password" name="new-password" required>
      </div>
      <button type="submit" class="register-btn">Register</button>
    </form>
  </div>

  <!-- JavaScript for Automatic Carousel Sliding -->
  <script>
    let currentSlide = 0;
    const slides = document.getElementsByClassName('carousel-slide');

    function showSlide(index) {
      for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('active');
      }
      slides[index].classList.add('active');
    }

    function changeSlide(direction) {
      currentSlide += direction;
      if (currentSlide >= slides.length) currentSlide = 0;
      if (currentSlide < 0) currentSlide = slides.length - 1;
      showSlide(currentSlide);
    }

    function autoSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) currentSlide = 0;
      showSlide(currentSlide);
      setTimeout(autoSlide, 4000); // Slide every 4 seconds
