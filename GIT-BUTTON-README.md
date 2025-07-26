# 🚀 Git Auto Script Button

ปุ่มสำหรับรัน git-auto.sh script ได้อย่างง่ายดาย!

## 📁 ไฟล์ที่สร้าง

- `git-button.html` - หน้าเว็บที่มีปุ่มสำหรับรัน git script
- `run-command.php` - Backend สำหรับรันคำสั่ง git
- `GIT-BUTTON-README.md` - ไฟล์นี้

## 🎯 ฟีเจอร์

### ปุ่มหลัก:
- **🔄 รัน Git Auto** - รันไฟล์ `./git-auto.sh`
- **📊 ดู Git Status** - แสดงสถานะ git repository
- **📜 ดู Git Log** - แสดง commit ล่าสุด 5 รายการ

### ฟีเจอร์เพิ่มเติม:
- ✅ แสดงผลลัพธ์แบบ real-time
- ✅ Loading animation ขณะรันคำสั่ง
- ✅ แสดงสีเขียวเมื่อสำเร็จ, สีแดงเมื่อผิดพลาด
- ✅ Responsive design ใช้งานได้ทั้งมือถือและคอมพิวเตอร์
- ✅ Security - มีการตรวจสอบคำสั่งที่อนุญาต

## 🚀 วิธีใช้งาน

### วิธีที่ 1: ใช้ผ่าน Web Browser
1. เปิดไฟล์ `git-button.html` ใน browser
2. กดปุ่มที่ต้องการ
3. ดูผลลัพธ์ในกล่องด้านล่าง

### วิธีที่ 2: ใช้ผ่าน Web Server
1. เปิด PHP web server:
   ```bash
   php -S localhost:8080
   ```
2. เปิด browser ไปที่: `http://localhost:8080/git-button.html`
3. กดปุ่มที่ต้องการ

### วิธีที่ 3: ใช้ Terminal (ทางเลือก)
```bash
# รัน git auto script
./git-auto.sh

# ดู git status
git status

# ดู git log
git log --oneline -5
```

## 🔒 ความปลอดภัย

ระบบมีการตรวจสอบคำสั่งที่อนุญาตเท่านั้น:
- `./git-auto.sh`
- `git status`
- `git log --oneline -5`
- `git log --oneline -10`
- `git branch`
- `git remote -v`
- `chmod +x git-auto.sh`
- `ls -la`

## 📱 Mobile Friendly

ปุ่มทำงานได้ดีในมือถือ:
- ปุ่มขนาดใหญ่ กดง่าย
- ตัวอักษรชัดเจน
- Layout ปรับตามขนาดหน้าจอ

## 🎨 Design Features

- **Gradient Background** - พื้นหลังไล่สีสวยงาม
- **Hover Effects** - ปุ่มมีเอฟเฟคเมื่อเอาเมาส์ชี้
- **Loading Animation** - แสดง spinner ขณะกำลังรัน
- **Terminal Style Output** - ผลลัพธ์แสดงแบบ terminal
- **Color Coded Results** - สีเขียว = สำเร็จ, สีแดง = ผิดพลาด

## 💡 Tips

1. **กดปุ่ม "📊 ดู Git Status" ก่อน** เพื่อดูว่ามีไฟล์อะไรเปลี่ยนแปลง
2. **กดปุ่ม "🔄 รัน Git Auto"** เมื่อพร้อม commit และ push
3. **กดปุ่ม "📜 ดู Git Log"** เพื่อดู commit ล่าสุด

## 🐛 Troubleshooting

หากปุ่มไม่ทำงาน:
1. ตรวจสอบว่า PHP server ทำงานอยู่
2. ตรวจสอบว่าไฟล์ `git-auto.sh` มีสิทธิ์ execute
3. ใช้ Terminal รันคำสั่งโดยตรงแทน

## 🌟 จุดเด่น

- **ใช้งานง่าย** - แค่กดปุ่มเดียว
- **ประหยัดเวลา** - ไม่ต้องพิมพ์คำสั่งใน terminal
- **ปลอดภัย** - มีการกรองคำสั่งที่อนุญาต
- **สวยงาม** - UI/UX ที่ทันสมัย

---

**🎉 สนุกกับการใช้งาน Git Auto Button!**