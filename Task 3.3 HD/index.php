<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWE40006 Task 3.3 HD - PHP Deployment</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #f4f6f9; color: #333; }
        .card { background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 650px; margin: 0 auto; border-top: 5px solid #0078d4; }
        h1 { color: #0078d4; margin-top: 0; font-size: 24px; }
        .status { background: #d4edda; color: #155724; padding: 12px; border-radius: 4px; font-weight: bold; display: block; margin: 15px 0; border: 1px solid #c3e6cb; }
        ul { background: #f8f9fa; padding: 20px 35px; border-radius: 6px; border: 1px solid #e9ecef; }
        li { margin-bottom: 10px; }
        .footer { margin-top: 25px; font-size: 12px; color: #6c757d; text-align: center; }
    </style>
</head>
<body>
    <div class="card">
        <h1>SWE40006 Task 3.3 HD - Secondary Stack Deployment</h1>
        <p><strong>Student ID:</strong> 106214014</p>
        <div class="status">Status: Successfully Deployed PHP Runtime to Azure App Service!</div>
        
        <h3>Environment Execution Details</h3>
        <ul>
            <li><strong>Application Stack:</strong> PHP Engine</li>
            <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
            <li><strong>Server Operating System:</strong> <?php echo php_uname('s') . ' ' . php_uname('r'); ?></li>
            <li><strong>Host Domain:</strong> <?php echo $_SERVER['HTTP_HOST']; ?></li>
            <li><strong>Deployment Timestamp (UTC):</strong> <?php echo date('Y-m-d H:i:s'); ?></li>
        </ul>
        <div class="footer">
            SWE40006 Software Deployment and Evolution &copy; 2026 - Student ID 106214014
        </div>
    </div>
</body>
</html>