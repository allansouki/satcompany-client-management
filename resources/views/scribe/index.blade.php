<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-clients">
                                <a href="#endpoints-GETapi-clients">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-clients">
                                <a href="#endpoints-POSTapi-clients">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-clients--id-">
                                <a href="#endpoints-GETapi-clients--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-clients--id-">
                                <a href="#endpoints-DELETEapi-clients--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 16, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-clients">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-clients">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=utf-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Jo&atilde;o da Silva&quot;,
        &quot;cpf&quot;: &quot;11122233344&quot;,
        &quot;email&quot;: &quot;joao.silva1@email.com&quot;,
        &quot;phone&quot;: &quot;11987654321&quot;,
        &quot;cep&quot;: &quot;01001000&quot;,
        &quot;street&quot;: &quot;Pra&ccedil;a da S&eacute;&quot;,
        &quot;neighborhood&quot;: &quot;S&eacute;&quot;,
        &quot;number&quot;: &quot;10&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;S&atilde;o Paulo&quot;,
        &quot;state&quot;: &quot;SP&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Maria Oliveira&quot;,
        &quot;cpf&quot;: &quot;22233344455&quot;,
        &quot;email&quot;: &quot;maria.oliveira2@email.com&quot;,
        &quot;phone&quot;: &quot;11976543210&quot;,
        &quot;cep&quot;: &quot;01310930&quot;,
        &quot;street&quot;: &quot;Avenida Paulista&quot;,
        &quot;neighborhood&quot;: &quot;Bela Vista&quot;,
        &quot;number&quot;: &quot;1578&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;S&atilde;o Paulo&quot;,
        &quot;state&quot;: &quot;SP&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Carlos Pereira&quot;,
        &quot;cpf&quot;: &quot;33344455566&quot;,
        &quot;email&quot;: &quot;carlos.pereira3@email.com&quot;,
        &quot;phone&quot;: &quot;21998765432&quot;,
        &quot;cep&quot;: &quot;20040002&quot;,
        &quot;street&quot;: &quot;Rua da Assembleia&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;50&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Rio de Janeiro&quot;,
        &quot;state&quot;: &quot;RJ&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Ana Souza&quot;,
        &quot;cpf&quot;: &quot;44455566677&quot;,
        &quot;email&quot;: &quot;ana.souza4@email.com&quot;,
        &quot;phone&quot;: &quot;31991234567&quot;,
        &quot;cep&quot;: &quot;30130010&quot;,
        &quot;street&quot;: &quot;Avenida Afonso Pena&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;1000&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Belo Horizonte&quot;,
        &quot;state&quot;: &quot;MG&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Pedro Santos&quot;,
        &quot;cpf&quot;: &quot;55566677788&quot;,
        &quot;email&quot;: &quot;pedro.santos5@email.com&quot;,
        &quot;phone&quot;: &quot;11999887766&quot;,
        &quot;cep&quot;: &quot;04003000&quot;,
        &quot;street&quot;: &quot;Rua Vergueiro&quot;,
        &quot;neighborhood&quot;: &quot;Liberdade&quot;,
        &quot;number&quot;: &quot;200&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;S&atilde;o Paulo&quot;,
        &quot;state&quot;: &quot;SP&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Fernanda Lima&quot;,
        &quot;cpf&quot;: &quot;66677788899&quot;,
        &quot;email&quot;: &quot;fernanda.lima6@email.com&quot;,
        &quot;phone&quot;: &quot;21987651234&quot;,
        &quot;cep&quot;: &quot;22041001&quot;,
        &quot;street&quot;: &quot;Rua Barata Ribeiro&quot;,
        &quot;neighborhood&quot;: &quot;Copacabana&quot;,
        &quot;number&quot;: &quot;300&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Rio de Janeiro&quot;,
        &quot;state&quot;: &quot;RJ&quot;,
        &quot;status&quot;: &quot;inativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Rafael Costa&quot;,
        &quot;cpf&quot;: &quot;77788899900&quot;,
        &quot;email&quot;: &quot;rafael.costa7@email.com&quot;,
        &quot;phone&quot;: &quot;41991223344&quot;,
        &quot;cep&quot;: &quot;80010000&quot;,
        &quot;street&quot;: &quot;Rua XV de Novembro&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;500&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Curitiba&quot;,
        &quot;state&quot;: &quot;PR&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Juliana Rocha&quot;,
        &quot;cpf&quot;: &quot;88899900011&quot;,
        &quot;email&quot;: &quot;juliana.rocha8@email.com&quot;,
        &quot;phone&quot;: &quot;51999887755&quot;,
        &quot;cep&quot;: &quot;90010000&quot;,
        &quot;street&quot;: &quot;Rua dos Andradas&quot;,
        &quot;neighborhood&quot;: &quot;Centro Hist&oacute;rico&quot;,
        &quot;number&quot;: &quot;600&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Porto Alegre&quot;,
        &quot;state&quot;: &quot;RS&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Bruno Martins&quot;,
        &quot;cpf&quot;: &quot;99900011122&quot;,
        &quot;email&quot;: &quot;bruno.martins9@email.com&quot;,
        &quot;phone&quot;: &quot;61988776655&quot;,
        &quot;cep&quot;: &quot;70040900&quot;,
        &quot;street&quot;: &quot;Esplanada dos Minist&eacute;rios&quot;,
        &quot;neighborhood&quot;: &quot;Zona C&iacute;vico-Administrativa&quot;,
        &quot;number&quot;: &quot;1&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Bras&iacute;lia&quot;,
        &quot;state&quot;: &quot;DF&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Camila Ferreira&quot;,
        &quot;cpf&quot;: &quot;00011122233&quot;,
        &quot;email&quot;: &quot;camila.ferreira10@email.com&quot;,
        &quot;phone&quot;: &quot;85991234567&quot;,
        &quot;cep&quot;: &quot;60060000&quot;,
        &quot;street&quot;: &quot;Avenida Dom Lu&iacute;s&quot;,
        &quot;neighborhood&quot;: &quot;Meireles&quot;,
        &quot;number&quot;: &quot;900&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Fortaleza&quot;,
        &quot;state&quot;: &quot;CE&quot;,
        &quot;status&quot;: &quot;inativo&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Cliente 1&quot;,
        &quot;cpf&quot;: &quot;06132651684&quot;,
        &quot;email&quot;: &quot;cliente1_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11937501547&quot;,
        &quot;cep&quot;: &quot;34388420&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;401&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Porto Alegre&quot;,
        &quot;state&quot;: &quot;PR&quot;,
        &quot;status&quot;: &quot;inativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Cliente 2&quot;,
        &quot;cpf&quot;: &quot;29846447268&quot;,
        &quot;email&quot;: &quot;cliente2_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11982997623&quot;,
        &quot;cep&quot;: &quot;16003012&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;183&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Rio de Janeiro&quot;,
        &quot;state&quot;: &quot;MG&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Cliente 3&quot;,
        &quot;cpf&quot;: &quot;45210621268&quot;,
        &quot;email&quot;: &quot;cliente3_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11944287942&quot;,
        &quot;cep&quot;: &quot;54856706&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;299&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Rio de Janeiro&quot;,
        &quot;state&quot;: &quot;RS&quot;,
        &quot;status&quot;: &quot;inativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;Cliente 4&quot;,
        &quot;cpf&quot;: &quot;01910759230&quot;,
        &quot;email&quot;: &quot;cliente4_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11976526855&quot;,
        &quot;cep&quot;: &quot;63861367&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;487&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Porto Alegre&quot;,
        &quot;state&quot;: &quot;RS&quot;,
        &quot;status&quot;: &quot;inativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Cliente 5&quot;,
        &quot;cpf&quot;: &quot;97729281332&quot;,
        &quot;email&quot;: &quot;cliente5_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11938133749&quot;,
        &quot;cep&quot;: &quot;63110766&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;108&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;S&atilde;o Paulo&quot;,
        &quot;state&quot;: &quot;RJ&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Cliente 6&quot;,
        &quot;cpf&quot;: &quot;19273579138&quot;,
        &quot;email&quot;: &quot;cliente6_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11987865593&quot;,
        &quot;cep&quot;: &quot;74765893&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;71&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Curitiba&quot;,
        &quot;state&quot;: &quot;RS&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Cliente 7&quot;,
        &quot;cpf&quot;: &quot;31217295425&quot;,
        &quot;email&quot;: &quot;cliente7_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11991581657&quot;,
        &quot;cep&quot;: &quot;59579546&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;129&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Curitiba&quot;,
        &quot;state&quot;: &quot;MG&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;name&quot;: &quot;Cliente 8&quot;,
        &quot;cpf&quot;: &quot;37011228535&quot;,
        &quot;email&quot;: &quot;cliente8_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11985172963&quot;,
        &quot;cep&quot;: &quot;06593893&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;411&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Porto Alegre&quot;,
        &quot;state&quot;: &quot;SP&quot;,
        &quot;status&quot;: &quot;inativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;name&quot;: &quot;Cliente 9&quot;,
        &quot;cpf&quot;: &quot;19447279460&quot;,
        &quot;email&quot;: &quot;cliente9_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11928758946&quot;,
        &quot;cep&quot;: &quot;45874534&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;334&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;Porto Alegre&quot;,
        &quot;state&quot;: &quot;RS&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Cliente 10&quot;,
        &quot;cpf&quot;: &quot;64486046008&quot;,
        &quot;email&quot;: &quot;cliente10_1768525441@teste.com&quot;,
        &quot;phone&quot;: &quot;11959836525&quot;,
        &quot;cep&quot;: &quot;83411453&quot;,
        &quot;street&quot;: &quot;Rua Teste&quot;,
        &quot;neighborhood&quot;: &quot;Centro&quot;,
        &quot;number&quot;: &quot;254&quot;,
        &quot;complement&quot;: null,
        &quot;city&quot;: &quot;S&atilde;o Paulo&quot;,
        &quot;state&quot;: &quot;MG&quot;,
        &quot;status&quot;: &quot;ativo&quot;,
        &quot;created_at&quot;: &quot;15/01/2026&quot;,
        &quot;updated_at&quot;: &quot;15/01/2026&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-clients" data-method="GET"
      data-path="api/clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-clients"
                    onclick="tryItOut('GETapi-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-clients"
                    onclick="cancelTryOut('GETapi-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-clients">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-clients">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/clients" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"cpf\": \"amniihfqcoy\",
    \"email\": \"agustin98@example.com\",
    \"phone\": \"hdtqtqxbajwbpilpm\",
    \"cep\": \"ufinllwl\",
    \"street\": \"oauydlsmsjuryvojcybzv\",
    \"neighborhood\": \"rbyickznkygloigmkwxph\",
    \"number\": \"lvazjrcnf\",
    \"complement\": \"baqywuxhgjjmzuxjubqou\",
    \"city\": \"zswiwxtrkimfcatbxspzm\",
    \"state\": \"ra\",
    \"status\": \"inativo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "cpf": "amniihfqcoy",
    "email": "agustin98@example.com",
    "phone": "hdtqtqxbajwbpilpm",
    "cep": "ufinllwl",
    "street": "oauydlsmsjuryvojcybzv",
    "neighborhood": "rbyickznkygloigmkwxph",
    "number": "lvazjrcnf",
    "complement": "baqywuxhgjjmzuxjubqou",
    "city": "zswiwxtrkimfcatbxspzm",
    "state": "ra",
    "status": "inativo"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-clients">
</span>
<span id="execution-results-POSTapi-clients" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-clients"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-clients"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-clients">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-clients" data-method="POST"
      data-path="api/clients"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-clients', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-clients"
                    onclick="tryItOut('POSTapi-clients');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-clients"
                    onclick="cancelTryOut('POSTapi-clients');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-clients"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/clients</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-clients"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-clients"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 255 caracteres. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cpf</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cpf"                data-endpoint="POSTapi-clients"
               value="amniihfqcoy"
               data-component="body">
    <br>
<p>O campo value deve conter 11 caracteres. Example: <code>amniihfqcoy</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-clients"
               value="agustin98@example.com"
               data-component="body">
    <br>
<p>O campo value não contém um endereço de e-mail válido. Example: <code>agustin98@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-clients"
               value="hdtqtqxbajwbpilpm"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 20 caracteres. Example: <code>hdtqtqxbajwbpilpm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cep</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cep"                data-endpoint="POSTapi-clients"
               value="ufinllwl"
               data-component="body">
    <br>
<p>O campo value deve conter 8 caracteres. Example: <code>ufinllwl</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>street</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="street"                data-endpoint="POSTapi-clients"
               value="oauydlsmsjuryvojcybzv"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 255 caracteres. Example: <code>oauydlsmsjuryvojcybzv</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>neighborhood</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="neighborhood"                data-endpoint="POSTapi-clients"
               value="rbyickznkygloigmkwxph"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 255 caracteres. Example: <code>rbyickznkygloigmkwxph</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="number"                data-endpoint="POSTapi-clients"
               value="lvazjrcnf"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 10 caracteres. Example: <code>lvazjrcnf</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>complement</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="complement"                data-endpoint="POSTapi-clients"
               value="baqywuxhgjjmzuxjubqou"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 255 caracteres. Example: <code>baqywuxhgjjmzuxjubqou</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-clients"
               value="zswiwxtrkimfcatbxspzm"
               data-component="body">
    <br>
<p>O campo value não deve conter mais de 255 caracteres. Example: <code>zswiwxtrkimfcatbxspzm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>state</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="state"                data-endpoint="POSTapi-clients"
               value="ra"
               data-component="body">
    <br>
<p>O campo value deve conter 2 caracteres. Example: <code>ra</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-clients"
               value="inativo"
               data-component="body">
    <br>
<p>Example: <code>inativo</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>ativo</code></li> <li><code>inativo</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-clients--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-clients--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/clients/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-clients--id-">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 5,
    &quot;name&quot;: &quot;Jo&atilde;o da Silva&quot;,
    &quot;cpf&quot;: &quot;11122233344&quot;,
    &quot;email&quot;: &quot;joao.silva1@email.com&quot;,
    &quot;phone&quot;: &quot;11987654321&quot;,
    &quot;cep&quot;: &quot;01001000&quot;,
    &quot;street&quot;: &quot;Pra&ccedil;a da S&eacute;&quot;,
    &quot;neighborhood&quot;: &quot;S&eacute;&quot;,
    &quot;number&quot;: &quot;10&quot;,
    &quot;complement&quot;: null,
    &quot;city&quot;: &quot;S&atilde;o Paulo&quot;,
    &quot;state&quot;: &quot;SP&quot;,
    &quot;status&quot;: &quot;ativo&quot;,
    &quot;created_at&quot;: null,
    &quot;updated_at&quot;: null
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-clients--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-clients--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-clients--id-" data-method="GET"
      data-path="api/clients/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-clients--id-"
                    onclick="tryItOut('GETapi-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-clients--id-"
                    onclick="cancelTryOut('GETapi-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-clients--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/clients/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-clients--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the client. Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-clients--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-clients--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/clients/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/clients/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-clients--id-">
</span>
<span id="execution-results-DELETEapi-clients--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-clients--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-clients--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-clients--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-clients--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-clients--id-" data-method="DELETE"
      data-path="api/clients/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-clients--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-clients--id-"
                    onclick="tryItOut('DELETEapi-clients--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-clients--id-"
                    onclick="cancelTryOut('DELETEapi-clients--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-clients--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/clients/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-clients--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-clients--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the client. Example: <code>5</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
