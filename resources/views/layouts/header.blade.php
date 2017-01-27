<!DOCTYPE html>
<html lang="en">
    <title>360 | TSES</title>
    <body id="app-layout">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <img class="img-responsive" 
                             src="{{ URL::asset('images/CA_logo.png') }}" alt="360 | School Empowerment System" /> </a>
                </div>

                <div class="collapse navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <h2 align='center' style="color: #fff">Online Student Registration</h2>
                </div>
                
            </div>
        </nav>
        
        <ul class="breadcrumb"><li><a href="#">Home</a></li>
            <li>Student Registration</li>
        </ul> 
        @yield('content')
    </body>
</html>
