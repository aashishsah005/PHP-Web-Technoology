@echo off
cd /d "C:\xampp\htdocs\WT_practical"

git add .
git commit -m "updated %date% %time%"
git push origin main
