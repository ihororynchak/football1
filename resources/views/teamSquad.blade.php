<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>
<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom container">
    <div class="col-md-3 mb-2 mb-md-0">
        MAMA
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
        @auth
            <a href="{{route('dashboard')}}">
                <button type="button" class="btn btn-outline-primary me-2">{{auth()->user()->name}}</button>
            </a>
        @else
            <a href="{{route('login')}}">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
            </a>
            <a href="{{route('register')}}">
                <button type="button" class="btn btn-primary">Sign-up</button>
            </a>
        @endauth

    </div>
</header>


<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">

        @foreach($squad as $player)
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">{{ $player->player->data->birthdate }}</strong>
                        <h3 class="mb-0">{{ $player->player->data->common_name }}</h3>
                        <div class="mb-1 text-body-secondary">Rating: {{ $player->rating }}</div>
                        <div class="mb-1 text-body-secondary">Height: {{ $player->player->data->height ?? 'nome' }} / Weight: {{ $player->player->data->weight ?? 'none' }}</div>
                        <p class="card-text mb-auto">Nationality: {{ $player->player->data->nationality }}</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="{{ $player->player->data->image_path }}" height="180" alt="..." class="p-3">
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                From the Firehose
            </h3>

            <article class="blog-post">
                <h2 class="blog-post-title">Sample blog post</h2>
                <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                    Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                <hr>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h2>Blockquotes</h2>
                <p>This is an example blockquote in action:</p>
                <blockquote class="blockquote">
                    <p>Quoted text goes here.</p>
                </blockquote>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>Example lists</h3>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout. This is an example unordered list:</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>And this is an ordered list:</p>
                <ol>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ol>
                <p>And this is a definiton list:</p>
                <dl>
                    <dt>HyperText Markup Language (HTML)</dt>
                    <dd>The language used to describe and define the content of a Web page</dd>
                    <dt>Cascading Style Sheets (CSS)</dt>
                    <dd>Used to describe the appearance of Web content</dd>
                    <dt>JavaScript (JS)</dt>
                    <dd>The programming language used to build advanced Web sites and applications</dd>
                </dl>
                <h2>Inline HTML elements</h2>
                <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a
                        href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
                </p>
                <ul>
                    <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.
                    </li>
                    <li><em>To italicize text</em>, use <code
                            class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.
                    </li>
                    <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code
                            class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code
                            class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.
                    </li>
                    <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                            class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.
                    </li>
                    <li>
                        <del>Deleted</del>
                        text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and
                        <ins>inserted</ins>
                        text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.
                    </li>
                    <li>Superscript <sup>text</sup> uses <code
                            class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
                        <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
                    </li>
                </ul>
                <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                <h2>Heading</h2>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>Sub-heading</h3>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <pre><code>Example code block</code></pre>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout.</p>
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <blockquote>
                    <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                </blockquote>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>Example table</h3>
                <p>And don't forget about tables in these posts:</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Upvotes</th>
                        <th>Downvotes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Alice</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>4</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Charlie</td>
                        <td>7</td>
                        <td>9</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Totals</td>
                        <td>21</td>
                        <td>23</td>
                    </tr>
                    </tfoot>
                </table>

                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout.</p>
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout.</p>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication,
                        writers, content, or something else entirely. Totally up to you.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</main>


<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <p>Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg>
                    </a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#">
                        <svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </footer>
</div>

</body>
</html>
