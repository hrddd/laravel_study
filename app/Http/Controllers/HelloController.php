<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response){
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
                    <dl class="simple_description_list">
                        <dt class="simple_description_list-term">
                            Request
                        </dt>
                        <dd class="simple_description_list-description">
                            <pre>{$request}</pre>
                        </dd>
                        <dt class="simple_description_list-term">
                            Response
                        </dt>
                        <dd class="simple_description_list-description">
                            <pre>{$response}</pre>
                        </dd>
                    </dl>
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
