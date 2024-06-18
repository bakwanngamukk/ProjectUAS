<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 400px;
            margin: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: black;
            border: none;
            color: white;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #000000;
        }
        .text-danger {
            color: #dc3545;
            font-size: 0.875rem; 
            margin-top: 2px;
        }
        .switch-link {
            text-align: center;
            margin-top: 10px;
        }
        .switch-link a {
            color: #007BFF;
            text-decoration: none;
        }
        .switch-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="/register" method="POST" id="register-form">
            @csrf
            <div class="form-group">
                <label for="register-email">Email</label>
                <input type="email" id="register-email" name="email" class="form-control" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="register-username">Username</label>
                <input type="text" id="register-username" name="username" class="form-control" value="{{ old('username') }}" required>
                @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="register-name">Name</label>
                <input type="text" id="register-name" name="name" class="form-control" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="register-telephone">Telephone Number</label>
                <input type="text" id="register-telephone" name="telephone_number" class="form-control" value="{{ old('telephone_number') }}" required>
                @if ($errors->has('telephone_number'))
                    <span class="text-danger">{{ $errors->first('telephone_number') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="register-address">Address</label>
                <input type="text" id="register-address" name="address" class="form-control" value="{{ old('address') }}" required>
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="password" class="form-control" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="register-password-confirm">Confirm Password</label>
                <input type="password" id="register-password-confirm" name="password_confirm" class="form-control" required>
                @if ($errors->has('password_confirm'))
                    <span class="text-danger">{{ $errors->first('password_confirm') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div class="switch-link">
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>
</body>
</html>
