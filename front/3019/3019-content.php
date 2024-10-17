<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3019">
    <div class="newsletter-section">
        <div class="newsletter-signup">
            <h2>Signup our newsletter to get update information, news, insight or promotions.</h2>
            <form>
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                <button type="submit">✉ SIGN UP</button>

            </form>
        </div>

        <div class="latest-post">
            <h3>Latest Post</h3>
            <ul>
                <li>
                    <img src="./img/1.jpg" alt="Post image">
                    <div class="content">
                        <a href="#">Why Quick Repairs Matter: How MobiCare Keeps You Connected</a>
                        <p>October 8, 2024</p>
                    </div>
                </li>
                <li>
                    <img src="./img/2.jpg" alt="Post image">
                    <div class="content">
                        <a href="#">How to Protect Your Phone Screen – Tips from MobiCare Experts</a>
                        <p>October 8, 2024</p>
                    </div>
                </li>
                <li>
                    <img src="./img/3.jpg" alt="Post image">
                    <div class="content">
                        <a href="#">Water Damage? Here's What to Do Before Bringing It to MobiCare</a>
                        <p>October 8, 2024</p>
                    </div>
                </li>
                <li>
                    <img src="./img/4.jpg" alt="Post image">
                    <div class="content">
                        <a href="#">Top 7 Signs Your Phone Needs a Battery Replacement</a>
                        <p>October 8, 2024</p>
                    </div>
                </li>
                <li>
                    <img src="./img/5.jpg" alt="Post image">
                    <div class="content">
                        <a href="#">Is It Better to Repair or Replace Your Phone? MobiCare Has the Answer</a>
                        <p>October 8, 2024</p>
                    </div>
                </li>
                <li>
                    <img src="./img/6.jpg" alt="Post image">
                    <div class="content">

                        <a href="#">5 Common Phone Problems and How MobiCare Can Fix Them Fast</a>
                        <p>October 8, 2024</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>