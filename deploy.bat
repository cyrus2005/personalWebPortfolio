@echo off
echo ========================================
echo Cyrus Wilburn Portfolio - Deployment
echo ========================================
echo.

echo [1/4] Adding all files to Git...
git add .
if %errorlevel% neq 0 (
    echo ERROR: Failed to add files to Git
    pause
    exit /b 1
)

echo [2/4] Committing changes...
git commit -m "Update portfolio - %date% %time%"
if %errorlevel% neq 0 (
    echo ERROR: Failed to commit changes
    pause
    exit /b 1
)

echo [3/4] Creating deployment ZIP...
git archive --format=zip --output=portfolio-deploy.zip HEAD
if %errorlevel% neq 0 (
    echo ERROR: Failed to create ZIP file
    pause
    exit /b 1
)

echo [4/4] Deployment files ready!
echo.
echo ========================================
echo DEPLOYMENT READY
echo ========================================
echo.
echo Files created:
echo - portfolio-deploy.zip (for cPanel upload)
echo.
echo Next steps:
echo 1. Upload portfolio-deploy.zip to cPanel File Manager
echo 2. Extract in public_html directory
echo 3. Set permissions: logs/ (755), includes/contact_handler.php (644)
echo 4. Update email in includes/contact_handler.php
echo 5. Test your website!
echo.
echo For GitHub deployment:
echo - Push to GitHub: git push origin main
echo - Use cPanel Git integration to clone from GitHub
echo.
pause
