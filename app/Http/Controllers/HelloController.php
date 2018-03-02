<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return <<<EOF
<html>
    <head></head>
    <body>
        <div class="wrapper">
            <header class="header">
                <h1>my first controller</h1>
            </header>
            <div class="content">
                <main class="content-main">
                    this is 'index' action of 'HelloController'.
                </main>
                <aside class="content-sub"></aside>
            </div>
            <footer class="footer">
                <aside class="footer-sub"></aside>
                <div class="footer-main"></div>
            </footer>
        </div>
    </body>
</html>
EOF;
    }
}
