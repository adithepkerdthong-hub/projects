<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.logo-img { height: 50px; }
.form-title { font-size: 1.5rem; font-weight: bold; color: #0a3556; }
.section-title { font-weight: bold; margin-top: 1.5rem; color: #0a3556; }
.text-muted { color: #666; }
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
        <div class="row mb-2 align-items-center">
            <div class="col-md-6">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" name="fullname">
            </div>
            <div class="col-md-2">
                <label>เพศ</label>
                <div class="d-inline-flex align-items-center">
                    <div class="form-check form-check-inline ms-2">
                        <input class="form-check-input" type="radio" name="gender" value="ชาย" id="male">
                        <label class="form-check-label" for="male">ชาย</label>
                    </div>
                    <div class="form-check form-check-inline ms-3">
                        <input class="form-check-input" type="radio" name="gender" value="หญิง" id="female">
                        <label class="form-check-label" for="female">หญิง</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-2">
                <label>วัน/เดือน/ปีเกิด</label>
                <input type="date" class="form-control" name="birthdate">
            </div>
            <div class="col-md-2">
                <label>อายุ (ปี)</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="col-md-2">
                <label>ส่วนสูง (ซม.)</label>
                <input type="number" class="form-control" name="height">
            </div>
            <div class="col-md-2">
                <label>น้ำหนัก (กก.)</label>
                <input type="number" class="form-control" name="weight">
            </div>
            <div class="col-md-2">
                <label>เชื้อชาติ</label>
                <input type="text" class="form-control" name="race">
            </div>
            <div class="col-md-2">
            <label>สัญชาติ</label>
                <input type="text" class="form-control" name="nationality">
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="idcard_check" id="idcard_check">
                    <label class="form-check-label" for="idcard_check">บัตรประจำตัวประชาชน</label>
                </div>
                <input type="text" class="form-control mt-1" name="idcard" placeholder="เลขที่">
            </div>
            <div class="col-md-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="passport_check" id="passport_check">
                    <label class="form-check-label" for="passport_check">หนังสือเดินทาง</label>
                </div>
                <input type="text" class="form-control mt-1" name="passport" placeholder="เลขที่">
            </div>
            <div class="col-md-6">
                <label>ที่อยู่ปัจจุบัน เลขที่</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-3">
                <label>โทรศัพท์บ้าน</label>
                <input type="text" class="form-control" name="homephone">
            </div>
            <div class="col-md-3">
                <label>โทรศัพท์มือถือ</label>
                <input type="text" class="form-control" name="mobile">
            </div>
            <div class="col-md-3">
                <label>อีเมล</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-3">
                <label>อาชีพปัจจุบัน/ตำแหน่ง</label>
                <input type="text" class="form-control" name="occupation">
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-3">
                <label>รายได้ (บาท/ปี)</label>
                <input type="number" class="form-control" name="income">
            </div>
            <div class="col-md-9">
                <label>ลักษณะงานที่ทำโดยสังเขป</label>
                <input type="text" class="form-control" name="jobdesc">
            </div>
        </div>
    </div>

    <div class="d-flex gap-3 mt-4">
        <button type="submit" class="btn w-100" style="background:#0a3556;color:#fff;border:none;">ส่งแบบฟอร์ม</button>
        <button type="reset" class="btn w-100" style="background:#fff;color:#0a3556;border:2px solid #0a3556;">ล้างแบบฟอร์ม</button>
    </div>
</form>
</div>