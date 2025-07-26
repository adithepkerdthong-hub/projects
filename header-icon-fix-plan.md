# แผนการแก้ไข Icon ที่หายไปใน Header

## สถานะปัจจุบัน
- Header ขาด FontAwesome icons ที่มีใน footer
- Footer มี building icon, map marker icon, และ phone icon
- Header มีแค่ logo และข้อความธรรมดา

## การแก้ไขที่ต้องทำ

### 1. เพิ่ม CSS สำหรับ header icons
ใน `index.php` ที่บรรทัดประมาณ 117 หลัง `.header-right` เพิ่ม CSS:

```css
.header-right {
    color: white;
    font-weight: 600;
    text-align: right;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    min-width: 200px;
    font-size: 1.08rem;
    letter-spacing: 0.2px;
    position: relative;
    padding-left: 40px;
}

.header-right::before {
    content: '\f1ad';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    color: #f39c12;
    font-size: 1rem;
    animation: iconHeartbeat 2s ease-in-out infinite;
}
```

### 2. แก้ไข HTML structure ใน header
ที่บรรทัด 349-351 เปลี่ยนจาก:
```html
<div class="header-right scroll-reveal-right">
    บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)
</div>
```

เป็น:
```html
<div class="header-right scroll-reveal-right">
    บริษัท ฟอลคอนประกันภัย จำกัด (มหาชน)
</div>
```

## ผลลัพธ์ที่คาดหวัง
- Header จะมี building icon (🏢) หน้าข้อความชื่อบริษัท
- Icon จะมีสีทองเหมือนใน footer
- Icon จะมี animation heartbeat เหมือนใน footer
- รูปแบบจะสอดคล้องกับ footer

## ไฟล์ที่ต้องแก้ไข
- `index.php` - เพิ่ม CSS และปรับ HTML structure

## การทดสอบ
1. เปิดไฟล์ index.php ใน browser
2. ตรวจสอบว่า header มี building icon แล้ว
3. ตรวจสอบ animation ของ icon
4. ตรวจสอบความสอดคล้องกับ footer