# Fix cPanel Git Repository

## Method 1: Reset cPanel Git Repository

1. **In cPanel:**
   - Go to "Git Version Control"
   - Find your repository
   - 
   Click "Delete" to remove the current repository
   - Create a new repository with the same name
   - Clone: `https://github.com/cyrus2005/personalPortfolioCyrus.git`
   - Branch: `main`

## Method 2: Manual Git Commands in cPanel

If you have SSH access, run these commands in cPanel:

```bash
cd /home/cyruwjtb/public_html/
git fetch origin
git reset --hard origin/main
git clean -fd
```

## Method 3: Disable Git Deployment

1. **In cPanel:**
   - Go to "Git Version Control"
   - Find your repository
   - Click "Manage"
   - Disable "Deploy" or "Pull" settings
   - Use manual file upload instead

## Method 4: Use cPanel File Manager

1. **Download from GitHub:**
   - Go to: https://github.com/cyrus2005/personalPortfolioCyrus
   - Click "Code" → "Download ZIP"

2. **Upload to cPanel:**
   - Extract ZIP locally
   - Upload all files to `public_html/` via File Manager
   - This bypasses Git entirely

## Recommended: Method 4 (Manual Upload)

This is the most reliable method and will get your website live immediately.
