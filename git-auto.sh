#!/bin/bash

# รับข้อความ commit จาก argument ถ้าไม่มีใช้ default
MESSAGE=${1:-"🔧 Auto commit: update project files"}

# ดู branch ปัจจุบัน
BRANCH=$(git rev-parse --abbrev-ref HEAD)

# ทำการ commit และ push
git add .
git commit -m "$MESSAGE"
git push origin "$BRANCH"
