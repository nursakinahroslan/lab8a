<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://analytics.upm.edu.my/info">
        <title>A Survey for UPM Academics</title>
        <h1> Rapid Survey on R&D Discipline in UPM</h1>
        <p> Deputy Vice Cansellor's Office (Research and Innovation)</p>
        <button type="button" class="btn btn-link"> Learn more >> </button>

        <!-- CSS and JavaScript -->
    </head>
    <body>

    <center><form>
            Staff ID * : <input type="int" name="staffid">
            <br>
            Author Names * : <input type="text" name="authorname">
            <br>
        </form></center>

    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Navbar Contents -->
        </nav>
    </div>

    @yield('content')
    </body>
</html>