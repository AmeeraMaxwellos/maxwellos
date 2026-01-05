<?php


http_response_code(404);

// Redirect to custom 404 HTML page
header("Location: /common/404.html");
exit();



?>