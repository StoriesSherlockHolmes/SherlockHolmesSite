<!doctype html>
<html lang="en">
<head>
    @include ('layouts.css')
</head>
<body>
    @include ('layouts.navbar')

<div class="container">
    <div class="col-lg-12">
        <div class="jumbotron">
            <center>Top Ads</center>
        </div>
    </div>
</div>

<div>
        <div class="col-lg-2 hidden-sm hidden-xs">
            <div class="jumbotron">
                <center>Left Ads</center>
            </div>
        </div>
        <div class="col-lg-8">
                <center><h3>The game is on! ;)  </h3></center>
            <div class="jumbotron">
                <div class="row">
                    <div class="col-lg-6">
                      <a href="/the-adventures-of-sherlock-holmes" class="btn btn-default btn-lg btn-block">The Adeventures of Sherlock Holmes</a>
                    </div>
                    <div class="col-lg-6">
                      <a href="/the-memoirs-of-sherlock-holmes" class="btn btn-default btn-lg btn-block">The Memoirs of Sherlock Holmes</a>
                    </div>     
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <a href="/the-return-of-sherlock-holmes" class="btn btn-default btn-lg btn-block">The Return of Sherlock Holmes</a>
                    </div>
                    <div class="col-lg-6">
                       <a href="/his-last-bow" class="btn btn-default btn-lg btn-block">His Last Bow</a>
                    </div>     
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <a href="/a-study-in-scarlet" class="btn btn-default btn-lg btn-block">A Study In Scarlet</a>
                    </div>
                    <div class="col-lg-6">
                       <a href="/sign-of-the-four" class="btn btn-default btn-lg btn-block">The Sign of the Four</a>
                    </div>     
                </div>
                <div class="row">
                    <div class="col-lg-6">
                      <a href="/the-hound-of-baskervilles" class="btn btn-default btn-lg btn-block">The Hound of the Baskervilles</a>
                    </div>
                    <div class="col-lg-6">
                      <a href="/the-valley-of-fear" class="btn btn-default btn-lg btn-block">The Valley of Fear</a>
                    </div>     
                </div>
                <div class="row">
                    <div class="col-lg-12">
                      <a href="/the-case-book" class="btn btn-default btn-lg btn-block">The Case-Book of Sherlock Holmes</a>
                    </div>     
                </div>
            </div>


    <div class="copyright" style="margin-left: 15px;">
        <h3>Copyright issues</h3>
        <p>
        Whether you may download these pdf is decided by your local
        copyright regulation laws:
        </p>

        <p>
        <span class="copyright-country">United States</span> —
        If U.S. copyright law applies to you, you may download neither
        the “Case-Book of Sherlock Holmes”—and the short stories contained
        in it—nor “The complete Canon” at the beginning of the list (since
        it also contains the case-book). You might want to take a look at
        the “U.S. edition” canon instead: This contains everything except
        the case-book. By the way: For the case-book, the copyright will
        expire between 2016 and 2023 (see
        <a href="http://www.sherlockian.net/acd/copyright.html">sherlockian.net</a>).
        </p>

        <p>
        <span class="copyright-country">Europe</span> —
        For all countries in the European Union, copyright seems to expire
        70 years after the author's death, thus it should be legal to
        download all the texts from there (see the
        <a href="http://onlinebooks.library.upenn.edu/okbooks.html">Online Books Page</a>).
        </p>

        <p>
        <span class="copyright-country">Canada</span> —
        The copyrights expired 1980 (see
        <a href="http://www.sherlockian.net/acd/copyright.html">sherlockian.net</a>).
        </p>

        <p>
        If in doubt, please consult the <a href="http://onlinebooks.library.upenn.edu/okbooks.html">Online Books Page</a>. It contains
        a lot of references and examples, and a mass of links to copyright
        information for many countries.
        </p>
   </div>
        </div>
        <div class="col-lg-2 hidden-xs hidden-sm">
            <div class="jumbotron">
                <center>Right Ads</center>
            </div>
        </div>
</div>

        @include ('layouts.js')
</body>
</html>