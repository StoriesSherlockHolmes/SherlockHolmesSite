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
            <div class="jumbotron">
                <embed src="../../assets/pdf/the-valley-s-h.pdf" class="" width="800px" height="1050px" />
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