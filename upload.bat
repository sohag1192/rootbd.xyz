@echo off
<<<<<<< HEAD
REM Change to your project directory
cd /d "C:\Users\sohag\OneDrive\Desktop\My Project\rootbd.xyz"

REM Initialize Git if not already done
IF NOT EXIST .git (
    git init
    git branch -M main

	git remote add origin https://github.com/sohag1192/rootbd.xyz.git
)

REM Add all files
git add .

REM Commit with a default message
git commit -m "Automated commit via batch file"

REM Push to GitHub
git push -u origin main

pause
=======
cd /d "C:\Users\sohag\OneDrive\Desktop\My Project\rootbd.xyz"

IF NOT EXIST .git (
    git init
    git branch -M main
    git remote add origin https://github.com/sohag1192/rootbd.xyz.git
)

git add .
git commit -m "Automated commit via batch file"

REM Pull latest changes before pushing
git pull --rebase origin main
IF %ERRORLEVEL% NEQ 0 (
    echo Merge conflict detected! Please resolve manually:
    echo   1. Edit conflicted files
    echo   2. Run: git add <files>
    echo   3. Run: git rebase --continue
    pause
    exit /b
)

git push -u origin main
pause
>>>>>>> 57b5792 (Automated commit via batch file)
