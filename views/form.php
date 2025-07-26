<style>
.logo-img { height: 50px; }
.form-title { font-size: 1.5rem; font-weight: bold; color: #0a3556; }
.section-title { font-weight: bold; margin-top: 1.5rem; color: #0a3556; }
.text-muted { color: #666; }
.form-row { display: flex; gap: 15px; margin-bottom: 10px; align-items: center; }
.form-group { flex: 1; }
.form-group.small { flex: 0 0 150px; }
.form-group.medium { flex: 0 0 200px; }
.form-group.large { flex: 0 0 300px; }
.form-control { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
.form-check { display: inline-block; margin-right: 15px; }
.btn { padding: 10px 20px; border-radius: 4px; cursor: pointer; }
</style>

<div class="mb-4">
    <div class="text-start">
        <img src="./assets/logo.png" alt="Falcon Insurance" class="logo-img">
    </div>
    <div class="text-center mt-4">
        <div class="form-title">ใบคำขอเอาประกันภัย</div>
        <div class="text-muted">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
    </div>
</div>
<form id="insuranceForm" method="post" action="submit.php">
    <div class="section-title">1. รายละเอียดผู้ขอเอาประกันภัย</div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="form-row">
            <div class="form-group large">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" name="fullname">
            </div>
            <div class="form-group">
                <label>เพศ</label>
                <div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="ชาย" id="male">
                        <label for="male">ชาย</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="หญิง" id="female">
                        <label for="female">หญิง</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group medium">
                <label>วัน/เดือน/ปีเกิด</label>
                <input type="date" class="form-control" name="birthdate">
            </div>
            <div class="form-group small">
                <label>อายุ (ปี)</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="form-group small">
                <label>ส่วนสูง (ซม.)</label>
                <input type="number" class="form-control" name="height">
            </div>
            <div class="form-group small">
                <label>น้ำหนัก (กก.)</label>
                <input type="number" class="form-control" name="weight">
            </div>
            <div class="form-group small">
                <label>เชื้อชาติ</label>
                <input type="text" class="form-control" name="race">
            </div>
            <div class="form-group small">
                <label>สัญชาติ</label>
                <input type="text" class="form-control" name="nationality">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group medium">
                <div class="form-check">
                    <input type="checkbox" name="idcard_check" id="idcard_check">
                    <label for="idcard_check">บัตรประจำตัวประชาชน</label>
                </div>
                <input type="text" class="form-control" name="idcard" placeholder="เลขที่" style="margin-top: 5px;">
            </div>
            <div class="form-group medium">
                <div class="form-check">
                    <input type="checkbox" name="passport_check" id="passport_check">
                    <label for="passport_check">หนังสือเดินทาง</label>
                </div>
                <input type="text" class="form-control" name="passport" placeholder="เลขที่" style="margin-top: 5px;">
            </div>
            <div class="form-group">
                <label>ที่อยู่ปัจจุบัน เลขที่</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>โทรศัพท์บ้าน</label>
                <input type="text" class="form-control" name="homephone">
            </div>
            <div class="form-group">
                <label>โทรศัพท์มือถือ</label>
                <input type="text" class="form-control" name="mobile">
            </div>
            <div class="form-group">
                <label>อีเมล</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>อาชีพปัจจุบัน/ตำแหน่ง</label>
                <input type="text" class="form-control" name="occupation">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group medium">
                <label>รายได้ (บาท/ปี)</label>
                <input type="number" class="form-control" name="income">
            </div>
            <div class="form-group">
                <label>ลักษณะงานที่ทำโดยสังเขป</label>
                <input type="text" class="form-control" name="jobdesc">
            </div>
        </div>
    </div>

    <div style="display: flex; gap: 15px; margin-top: 20px;">
        <button type="submit" class="btn" style="background:#0a3556;color:#fff;border:none;flex:1;">ส่งแบบฟอร์ม</button>
        <button type="reset" class="btn" style="background:#fff;color:#0a3556;border:2px solid #0a3556;flex:1;">ล้างแบบฟอร์ม</button>
    </div>
</form>
</div>