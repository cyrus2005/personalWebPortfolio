# Cyrus Wilburn Portfolio - Simple Deployment Script

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Cyrus Wilburn Portfolio - Deployment" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Check if Git is available
$gitCheck = git --version 2>$null
if ($LASTEXITCODE -eq 0) {
    Write-Host "[✓] Git is available: $gitCheck" -ForegroundColor Green
} else {
    Write-Host "[✗] Git is not installed or not in PATH" -ForegroundColor Red
    Write-Host "Please install Git from https://git-scm.com/" -ForegroundColor Yellow
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host ""
Write-Host "[1/4] Adding all files to Git..." -ForegroundColor Yellow
git add .
if ($LASTEXITCODE -ne 0) {
    Write-Host "[✗] ERROR: Failed to add files to Git" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "[2/4] Committing changes..." -ForegroundColor Yellow
$timestamp = Get-Date -Format "yyyy-MM-dd HH:mm:ss"
git commit -m "Update portfolio - $timestamp"
if ($LASTEXITCODE -ne 0) {
    Write-Host "[✗] ERROR: Failed to commit changes" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "[3/4] Creating deployment ZIP..." -ForegroundColor Yellow
git archive --format=zip --output=portfolio-deploy.zip HEAD
if ($LASTEXITCODE -ne 0) {
    Write-Host "[✗] ERROR: Failed to create ZIP file" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "[4/4] Deployment files ready!" -ForegroundColor Green
Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "DEPLOYMENT READY" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Files created:" -ForegroundColor White
Write-Host "- portfolio-deploy.zip (for cPanel upload)" -ForegroundColor Green
Write-Host ""
Write-Host "Next steps:" -ForegroundColor White
Write-Host "1. Upload portfolio-deploy.zip to cPanel File Manager" -ForegroundColor Yellow
Write-Host "2. Extract in public_html directory" -ForegroundColor Yellow
Write-Host "3. Set permissions: logs/ (755), includes/contact_handler.php (644)" -ForegroundColor Yellow
Write-Host "4. Update email in includes/contact_handler.php" -ForegroundColor Yellow
Write-Host "5. Test your website!" -ForegroundColor Yellow
Write-Host ""
Write-Host "For GitHub deployment:" -ForegroundColor White
Write-Host "- Push to GitHub: git push origin main" -ForegroundColor Yellow
Write-Host "- Use cPanel Git integration to clone from GitHub" -ForegroundColor Yellow
Write-Host ""

Write-Host ""
Read-Host "Press Enter to exit"
