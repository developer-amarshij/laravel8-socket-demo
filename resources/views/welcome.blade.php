<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Echo Socket Test</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Laravel Echo (IIFE build) -->
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1/dist/echo.iife.js"></script>

    <!-- Socket.IO (compatible with Laravel Echo Server) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        #test {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
    <body>
        <h2>Laravel Echo Socket Test</h2>
        <div id="test"></div>

        <script>
            $(document).ready(function () {

                window.Echo = new Echo({
                    broadcaster: 'socket.io',
                    host: 'http://localhost:6001',
                });

                // 1️⃣ Socket connected
                Echo.connector.socket.on('connect', () => {
                    console.log('✅ Echo socket connected');
                });

                // 2️⃣ Connection error
                Echo.connector.socket.on('connect_error', (error) => {
                    console.error('❌ Echo connect_error:', error.message || error);
                });

                // 3️⃣ Reconnection attempt
                Echo.connector.socket.on('reconnect_attempt', (attempt) => {
                    console.warn('🔄 Echo reconnect attempt:', attempt);
                });

                // 4️⃣ Successfully reconnected
                Echo.connector.socket.on('reconnect', (attempt) => {
                    console.log('✅ Echo reconnected after attempt:', attempt);
                });

                // 5️⃣ Disconnected
                Echo.connector.socket.on('disconnect', (reason) => {
                    console.warn('⚠️ Echo disconnected:', reason);
                });

                // 6️⃣ General socket error
                Echo.connector.socket.on('error', (error) => {
                    console.error('❌ Echo socket error:', error);
                });

                // Listen to Laravel channel
                Echo.channel('laravel_database_chat')
                    .listen('.MessageSent', (e) => {
                        $('#test').append(`<p>${e.message}</p>`);
                        console.log('🔥 EVENT RECEIVED laravel_database_chat:', e);
                    });
            });
        </script>
    </body>
</html>
