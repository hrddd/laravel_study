<html>
    <head></head>
    <body>
        <div class="wrapper">
            <header class="header">
                <h1>my first template</h1>
            </header>
            <div class="content">
                <main class="content-main">
                    this is 'hello.index' blade template.
                    <dl class="simple_description_list">
                        <dt class="simple_description_list-term">
                            Arguments 'Request'
                        </dt>
                        <dd class="simple_description_list-description">
                            <pre>{{$request}}</pre>
                        </dd>
                        <dt class="simple_description_list-term">
                            Arguments 'Response'
                        </dt>
                        <dd class="simple_description_list-description">
                            <pre>{{$response}}</pre>
                        </dd>
                        <dt class="simple_description_list-term">
                            Arguments 'msg'
                        </dt>
                        <dd class="simple_description_list-description">
                            <pre>{{$msg}}</pre>
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