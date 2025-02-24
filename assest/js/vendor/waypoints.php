<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle AJAX requests when a waypoint is triggered
    $waypoint = $_POST['waypoint'] ?? null;

    if ($waypoint) {
        // Process the waypoint data (e.g., log it, save to a database)
        $response = [
            'status' => 'success',
            'message' => "Waypoint '{$waypoint}' reached and processed on the server.",
        ];
    } else {
        $response = [
            'status' => 'error',
            'message' => 'No waypoint data received.',
        ];
    }

    // Return a JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Waypoints Example</title>
    <style>
        body {
            height: 200vh; /* Simulate long scrolling */
            font-family: Arial, sans-serif;
        }
        .waypoint {
            margin-top: 100vh; /* Place the waypoint halfway down the page */
            height: 100px;
            background: #2575fc;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="waypoint" id="waypoint-1">Waypoint 1</div>
    <div class="waypoint" id="waypoint-2">Waypoint 2</div>

    <script>
        // Function to detect if an element is in the viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            );
        }

        // Send the waypoint data to the PHP server
        function triggerWaypoint(waypointId) {
            fetch('<?php echo $_SERVER['PHP_SELF']; ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `waypoint=${encodeURIComponent(waypointId)}`,
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data.message);
                })
                .catch((error) => console.error('Error:', error));
        }

        // Add scroll event listener
        document.addEventListener('scroll', () => {
            const waypoints = document.querySelectorAll('.waypoint');
            waypoints.forEach((waypoint) => {
                if (isInViewport(waypoint)) {
                    triggerWaypoint(waypoint.id);
                }
            });
        });
    </script>
</body>
</html>
