<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["javascript","php","python","bash"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                                  <a href="#" data-language-name="bash">bash</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>general</h1>
<!-- START_28e9d0941f6bc6d018b62145708d9208 -->
<h2>Refresh a token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/auth-refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/v1/auth-refresh',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/auth-refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {token}'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/auth-refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/auth-refresh</code></p>
<!-- END_28e9d0941f6bc6d018b62145708d9208 -->
<!-- START_af82433e555a57f31d78233071a5a020 -->
<h2>Autenticação do usuário</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/v1/auth',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/auth'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {token}'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/auth</code></p>
<!-- END_af82433e555a57f31d78233071a5a020 -->
<!-- START_c5e64b712c39685cb2dedfa8eb581a21 -->
<h2>Get the authenticated User.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/v1/me',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/me'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {token}'
}
response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/me</code></p>
<!-- END_c5e64b712c39685cb2dedfa8eb581a21 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                                    <a href="#" data-language-name="bash">bash</a>
                              </div>
                </div>
    </div>
  </body>
</html>