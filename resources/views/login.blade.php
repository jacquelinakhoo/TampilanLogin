<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="/login" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td><label for="level">Level</label></td>
                <td>
                    <select id="level" name="level">
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Login</button></td>
            </tr>
        </table>
    </form>

</body>
</html>