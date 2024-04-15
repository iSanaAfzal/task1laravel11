<style>
    body {
        font-family: "Arial", sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #ffa07a;
        /* Warna orange cerah */
        color: #333;
    }

    .container {
        width: 100%;
        max-width: 400px;
    }

    .card {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        transition: border-color 0.3s ease-in-out;
        outline: none;
        color: #333;
    }

    input:focus {
        border-color: #ff8c00;
        /* Warna orange saat focus */
    }

    button {
        background-color: #ff8c00;
        /* Warna orange cerah */
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    button:hover {
        background-color: #ff7f00;
        /* Warna orange sedikit lebih gelap saat hover */
    }
</style>

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <h2>Sign In</h2>
        <form method="POST" action="{{ route('login') }}">

            @csrf

            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="text" id="email" name="email" placeholder="email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
