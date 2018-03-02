<html>
    <head></head>
    <body>
        <div class="wrapper">
            <header class="header">
                <h1>my first form</h1>
            </header>
            <div class="content">
                <main class="content-main">
                    this is 'hello.index' blade template.
                    @isset ($entry_data)
                    <p>Hello {{$entry_data['name']}}.</p>
                    <p>Your ID is {{$entry_data['id']}}.</p>
                    @else
                    <p>please enter message...</p>
                    @endif
                    <form method="POST" action="/hello">
                        {{ csrf_field() }}
                        <label>name:</label><input type="text" name="name">
                        <label>id:</label><input type="text" name="id">
                        <input type="submit">
                    </form>
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