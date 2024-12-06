<!doctype html>
<html lang="en">
    <head>
        <title>Register</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="card">
                <div class="card-header">
                    Registration Form
                </div>
                <div class="card-body d-flex flex-column">
                    <form action="" method="post">
                        @csrf
                        <table class="container my-3">
                            <tr>
                                <td>
                                    <label for="userid">User id: </label>
                                </td>
                                <td>
                                    <input type="text" name="userid">
                                    @error('userid')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="password">Password: </label>
                                </td>
                                <td>
                                    <input type="password" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><label for="name">Name: </label></td>
                                <td>
                                    <input type="text" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td><label for="address">Address: </label></td>
                                <td>
                                    <input type="text" name="address">
                                </td>
                            </tr>
                            <tr>
                                <td><label for="country">Country: </label></td>
                                <td>
                                    <select name="country">
                                        <option>(Please select a country)</option>
                                        <option value="US">Mỹ</option>
                                        <option value="UK">Anh</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="zipcode">ZIP Code: </label></td>
                                <td><input type="number" name="zipcode" id=""></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email: </label></td>
                                <td><input type="email" name="email" id=""></td>
                            </tr>
                            <tr>
                                <td><label for="sex">Sex: </label></td>
                                <td>
                                    <input type="radio" name="sex" value=1> Male
                                    <input type="radio" name="sex" value=0> Female
                                </td>
                            </tr>
                            <tr>
                                <td><label for="language">Language: </label></td>
                                <td>
                                    <input type="checkbox" name="language" value="EN"> English
                                    <input type="checkbox" name="language" value="NonEN">Non English
                                </td>
                            </tr>
                            <tr>
                                <td><label for="about">About: </label></td>
                                <td><input type="text" name="about" style="height: 200px; width: 500px"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
