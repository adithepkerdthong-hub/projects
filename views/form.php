<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="./assets/responsive.css">
</style>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&family=Sarabun:wght@400;700&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
<div class="mb-5">
        <div class="col-md-4 text-start">
            <img src="./assets/logo.png" alt="Falcon Insurance" style="height:50px; margin-right:20px;">
        </div>
    <div class="text-center mt-4">
        <div class="form-title" style="font-size:1.6rem; font-weight:700; color:#0a3556;">ใบคำขอเอาประกันภัย</div>
        <div style="font-size:1.1rem; color:gray;">กรมธรรม์ประกันภัยโรคร้ายแรงและอุบัติเหตุ</div>
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
    <div class="section-title">2. รายละเอียดผู้รับประโยชน์</div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2 align-items-center">
            <div class="col-md-6">
                <label>ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" name="beneficiary">
            </div>
            <div class="col-md-6">
                <label>ความสัมพันธ์กับผู้ขอเอาประกันภัย</label>
                <input type="text" class="form-control" name="relation">
            </div>
        </div>
    </div>
    <div class="section-title">3. ระยะเวลาขอเอาประกันภัย</div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2 align-items-center">
            <div class="col-md-2">
                <label>เริ่มต้นวันที่</label>
                <input type="date" class="form-control" name="startdate">
            </div>
            <div class="col-md-2">
                <label>เวลา</label>
                <input type="time" class="form-control" name="starttime">
            </div>
            <div class="col-md-2">
                <label>สิ้นสุดวันที่</label>
                <input type="date" class="form-control" name="enddate">
            </div>
            <div class="col-md-2">
                <label>เวลา (24.00 น.)</label>
                <input type="text" class="form-control" name="endtime" value="24.00 น." readonly>
            </div>
        </div>
    </div>
    <div class="section-title">4. โปรดเลือกแผนประกันภัยที่ท่านต้องการ</div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2 align-items-center">
            <div class="col-md-6">
                <label>ชื่อแบบประกัน</label>
                <input type="text" class="form-control" name="planname">
            </div>
            <div class="col-md-6">
                <label>แผนที่</label>
                <input type="text" class="form-control" name="planid">
            </div>
        </div>
        <div class="row mb-2">
    <div class="col-md-6">
        <label>รวมเบี้ยประกันภัยที่ต้องชำระ</label>
        <div class="d-flex align-items-center flex-nowrap">
            <input type="number" class="form-control me-2" name="totalpremium" style="flex: 1 1 auto;">
            <span class="text-nowrap">บาท (รวมอากรแสตมป์และภาษีแล้ว)</span>
        </div>
    </div>
</div>
    </div>
    <div class="section-title">5. การชำระเบี้ยประกันภัย</div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2 align-items-center">
            <div class="col-md-12 d-flex flex-wrap align-items-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="paytype_year" id="paytype_year">
                    <label class="form-check-label" for="paytype_year">รายปี</label>
                </div>
                <div class="form-check form-check-inline ms-3">
                    <input class="form-check-input" type="checkbox" name="paytype_month" id="paytype_month">
                    <label class="form-check-label" for="paytype_month">ราย</label>
                </div>
                <input type="text" class="form-control d-inline-block ms-2" name="paytype_month_count" style="width:105px;" placeholder="จำนวนเดือน">
                <span class="ms-2">เดือนติดต่อกัน</span>
                <span class="ms-4">โดยวิธี</span>
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-12">
                <div class="d-flex flex-wrap align-items-center gap-3 mb-2">
                    <div class="form-check d-flex align-items-center flex-wrap" style="gap:8px;">
                        <input class="form-check-input" type="checkbox" name="paymethod_cash" id="paymethod_cash" style="margin-top:0;">
                        <label class="form-check-label mb-0" for="paymethod_cash" style="margin-bottom:0;">เงินสด โดยชำระผ่านบัญชีเงินฝาก ธนาคาร</label>
                        <input type="text" class="form-control" name="paymethod_cash_bank" style="width:350px;" placeholder="ชื่อธนาคาร">
                        <span>สาขา</span>
                        <input type="text" class="form-control" name="paymethod_cash_branch" style="width:250px;" placeholder="สาขา">
                        <span>บัญชีเลขที่</span>
                        <input type="text" class="form-control" name="paymethod_cash_account" style="width:250px;" placeholder="เลขที่บัญชี">
                    </div>
                    <div class="form-check d-flex align-items-center flex-wrap" style="gap:8px;">
                        <input class="form-check-input" type="checkbox" name="paymethod_credit" id="paymethod_credit" style="margin-top:0;">
                        <label class="form-check-label mb-0" for="paymethod_credit" style="margin-bottom:0;">บัตรเครดิต ธนาคาร</label>
                        <input type="text" class="form-control" name="paymethod_credit_bank" style="width:300px;" placeholder="ชื่อธนาคาร">
                        <span>หมายเลขบัตรเครดิต</span>
                        <input type="text" class="form-control" name="paymethod_credit_number" style="width:200px;" placeholder="หมายเลขบัตร">
                        <span>บัตรหมดอายุ</span>
                        <input type="text" class="form-control" name="paymethod_credit_expiry" style="width:100px;" placeholder="MM/YY">
                    </div>
                    <div class="form-check d-flex align-items-center flex-wrap" style="gap:8px;">
                        <input class="form-check-input" type="checkbox" name="paymethod_other" id="paymethod_other" style="margin-top:0;">
                        <label class="form-check-label mb-0" for="paymethod_other" style="margin-bottom:0;">อื่นๆ (พร้อมหลักฐานแนบ)</label>
                        <input type="text" class="form-control" name="paymethod_other_detail" style="width:100%;max-width:800px;" placeholder="รายละเอียด">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2 align-items-center">
            <div class="col-md-6">
                <label>ชื่อ-นามสกุล ผู้ชำระเบี้ยประกันภัย</label>
                <input type="text" class="form-control" name="payername">
            </div>
            <div class="col-md-6">
                <label>ความสัมพันธ์กับผู้ขอเอาประกันภัย</label>
                <input type="text" class="form-control" name="payerrelation">
            </div>
        </div>
    </div>
    <div class="section-title"><u>คำถามเกี่ยวกับสุขภาพและอื่นๆ</u>(บริษัทสามารถเลือกระบุได้ดังนี้)</div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>6. ท่านมีประกันภัยสุขภาพ ประกันภัยโรคร้ายแรง ประกันชีวิต หรือประกันภัยอุบัติเหตุ กับบริษัท ฟอลคอนประกันภัย จำกัด (มหาชน) หรือบริษัทประกันภัยอื่นหรือไม่</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hasinsurance" id="hasinsurance_no" value="ไม่มี">
                    <label class="form-check-label" for="hasinsurance_no">ไม่มี</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="hasinsurance" id="hasinsurance_yes" value="มี">
                    <label class="form-check-label" for="hasinsurance_yes">มี</label>
                </div>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control d-inline-block" name="insurance_detail" style="width:500px;max-width:100%;" placeholder="โปรดระบุ...">
            </div>
            <div class="col-auto ms-2">
                <span>ยังมีผลบังคับหรือไม่</span>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="insurance_active" id="insurance_active_no" value="ไม่มี">
                    <label class="form-check-label" for="insurance_active_no">ไม่มี</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="insurance_active" id="insurance_active_yes" value="มี">
                    <label class="form-check-label" for="insurance_active_yes">มี</label>
                </div>
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>7. ท่านเคยถูกปฏิเสธการขอเอาประกันชีวิต หรือประกันภัยสุขภาพ หรือประกันภัยโรคร้ายแรง หรือประกันภัยอุบัติเหตุส่วนบุคคล หรือ             	ถูกปฏิเสธการต่ออายุสัญญาประกันภัย หรือถูกเรียกเก็บเบี้ยประกันภัยเพิ่ม หรือเปลี่ยนแปลงเงื่อนไขสำหรับการประกันภัยดังกล่าวหรือไม่</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="refused" id="refused_no" value="ไม่เคย">
                    <label class="form-check-label" for="refused_no">ไม่เคย</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="refused" id="refused_yes" value="เคย">
                    <label class="form-check-label" for="refused_yes">เคย</label>
                </div>
            </div>
            <div class="col-auto" style="flex:1;min-width:200px;">
                <input type="text" class="form-control d-inline-block" name="refused_detail" style="width:100%;max-width:100%;" placeholder="โปรดระบุ...">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>8. ในระยะเวลา 5 ปีที่ผ่านมาท่านเคยพบแพทย์เพื่อรับการรักษา การบาดเจ็บ การเจ็บป่วย การผ่าตัด หรือได้รับการตรวจสุขภาพ  ตรวจวินิจฉัย อาทิเช่น เอ๊กซเรย์คอมพิวเตอร์ การตรวจด้วยคลื่นแม่เหล็กไฟฟ้า การส่งตรวจชิ้นเนื้อทางด้านพยาธิวิทยา การตรวจอัลตร้าซาวด์ หรือไม่  (หากเคย กรุณาระบุรายละเอียดคำวินิจฉัยของแพทย์ อาการหรืออาการแสดง การรักษาหรือคำแนะนำที่ได้รับ และวันเวลาดังกล่าว)</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="doctor5y" id="doctor5y_no" value="ไม่เคย">
                    <label class="form-check-label" for="doctor5y_no">ไม่เคย</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="doctor5y" id="doctor5y_yes" value="เคย">
                    <label class="form-check-label" for="doctor5y_yes">เคย</label>
                </div>
            </div>
            <div class="col-auto" style="flex:1;min-width:200px;">
                <input type="text" class="form-control d-inline-block" name="doctor5y_detail" style="width:100%;max-width:100%;" placeholder="โปรดระบุ...">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>9. ในระยะเวลา 5 ปีที่ผ่านมา ท่านเคยได้รับการวินิจฉัย  การรักษา การผ่าตัด การบำบัดหรืออยู่ระหว่าง การพักฟื้น ตลอดจนรับการปรึกษาและ 
     คำแนะนำจากแพทย์ด้วยโรคดังต่อไปนี้ หรือไม่ 
 โรคมะเร็ง โรคหลอดเลือดสมอง(Stroke) ความผิดปกติทางสมอง สมองเสื่อม โรคพาร์กินสัน โรคหัวใจและหลอดเลือดหัวใจ โรคปอดอุดกั้นเรื้อรัง โรคถุงลมโป่งพอง โรคไตเรื้อรังหรือไตวาย โรคตับหรือม้ามโต โรคตับแข็ง โรคพิษสุราเรื้อรัง โรคเอดส์หรือมีเลือดบวกต่อไวรัส HIV  โรคเลือด โรคเอสแอลอี (SLE) อัมพฤกษ์ อัมพาต ทุพพลภาพ พิการ โรคจิตประสาท เคยใช้สารเสพติด
                </span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease9" id="disease9_no" value="ไม่เคย">
                    <label class="form-check-label" for="disease9_no">ไม่เคย</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease9" id="disease9_yes" value="เคย">
                    <label class="form-check-label" for="disease9_yes">เคย</label>
                </div>
            </div>
            <div class="col-auto" style="flex:1;min-width:200px;">
                <input type="text" class="form-control d-inline-block" name="disease9_detail" style="width:100%;max-width:100%;" placeholder="โปรดระบุ...">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>10. ในระยะเวลา 5 ปีที่ผ่านมา ท่านเคยได้รับการวินิจฉัย  การรักษา การผ่าตัด การบำบัดหรืออยู่ระหว่าง การพักฟื้น ตลอดจนรับการปรึกษา
      และ คำแนะนำจากแพทย์ด้วยโรคดังต่อไปนี้ หรือไม่ 
      โรคความดันโลหิตสูง   โรคเบาหวาน  ไทรอยด์ คอพอก  เนื้องอกหรือถุงน้ำที่ไม่ใช่มะเร็ง โรคกระเพาะ โรคกรดไหลย้อน ปวดศีรษะ
      ไมเกรน โรคเก๊าท์ ริดสีดวงทวาร เส้นเลือดขอดที่ขา ต้อเนื้อต้อกระจก ไส้เลื่อน นิ่วทุกชนิด โรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) 
      ใส่วัสดุดามกระดูกที่แขน ขา หรือที่อื่นๆ 
                </span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease10" id="disease10_no" value="ไม่เคย">
                    <label class="form-check-label" for="disease10_no">ไม่เคย</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease10" id="disease10_yes" value="เคย">
                    <label class="form-check-label" for="disease10_yes">เคย</label>
                </div>
            </div>
            <div class="col-auto" style="flex:1;min-width:200px;">
                <input type="text" class="form-control d-inline-block" name="disease10_detail" style="width:100%;max-width:100%;" placeholder="โปรดระบุ...">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>11. โรคอื่นๆ หรือโรคประจำตัว หรือโรคเรื้อรังอื่นๆ  นอกเหนือจากที่กล่าวมาข้างต้น</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease11" id="disease11_no" value="ไม่เคย">
                    <label class="form-check-label" for="disease11_no">ไม่เคย</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disease11" id="disease11_yes" value="เคย">
                    <label class="form-check-label" for="disease11_yes">เคย</label>
                </div>
            </div>
            <div class="col-auto" style="flex:1;min-width:200px;">
                <input type="text" class="form-control d-inline-block" name="disease11_detail" style="width:100%;max-width:100%;" placeholder="โปรดระบุ...">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>12. ท่านสูบหรือเคยสูบบุหรี่ หรือใช้สารเสพติดอื่นหรือไม่</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="smoke12" id="smoke12_no" value="ไม่สูบ/ไม่เสพ">
                    <label class="form-check-label" for="smoke12_no">ไม่สูบ/ไม่เสพ</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="smoke12" id="smoke12_yes" value="สูบ/เสพ">
                    <label class="form-check-label" for="smoke12_yes">สูบ / เสพ</label>
                </div>
            </div>
            <div class="col-auto" style="min-width:120px;">
                <input type="text" class="form-control d-inline-block" name="smoke12_type" style="width:500px;max-width:100%;" placeholder="ชนิด">
            </div>
            <div class="col-auto" style="min-width:120px;">
                <input type="text" class="form-control d-inline-block" name="smoke12_amount" style="width:200px;max-width:100%;" placeholder="วันละ...มวน/วัน">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>13. ปัจจุบันท่านดื่ม สุราหรือของมึนเมาหรือไม่</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="drink13" id="drink13_no" value="ไม่ดื่ม">
                    <label class="form-check-label" for="drink13_no">ไม่ดื่ม</label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="drink13" id="drink13_yes" value="ดื่ม">
                    <label class="form-check-label" for="drink13_yes">ดื่ม</label>
                </div>
            </div>
            <div class="col-auto" style="min-width:120px;">
                <input type="text" class="form-control d-inline-block" name="drink13_type" style="width:500px;max-width:100%;" placeholder="ชนิด">
            </div>
            <div class="col-auto" style="min-width:120px;">
                <input type="text" class="form-control d-inline-block" name="drink13_amount" style="width:200px;max-width:100%;" placeholder="วันละ...แก้ว/วัน">
            </div>
        </div>
    </div>
    <div class="section-title"><u>คำถามความประสงค์จะใช้สิทธิขอยกเว้นภาษีเงินได้ตามกฎหมายว่าด้วยภาษีอากร</u></div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-1">
            <div class="col-md-12">
                <span>ผู้ขอเอาประกันภัยประสงค์จะใช้สิทธิขอยกเว้นภาษีเงินได้ตามกฎหมายว่าด้วยภาษีอากรหรือไม่</span>
            </div>
        </div>
        <div class="row mb-1 align-items-center">
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tax" id="tax_yes" value="มีความประสงค์">
                    <label class="form-check-label" for="tax_yes">
                        <div>มีความประสงค์ และยินยอมให้บริษัทประกันวินาศภัยส่งและเปิดเผยข้อมูลเกี่ยวกับเบี้ยประกันภัยต่อกรมสรรพากร ตามหลักเกณฑ์วิธีการที่กรมสรรพากรกำหนด</div>
                        <div class="mt-2">และหากผู้ขอเอาประกันภัยเป็นชาวต่างชาติ (Non-Thai Resident) ซึ่งเป็นผู้มีหน้าที่ต้องเสียภาษีเงินได้ตามกฎหมายว่าด้วยภาษีอากรโปรดระบุเลขประจำตัวผู้เสียภาษีที่ได้รับจากกรมสรรพากรเลขที่</div>
                        <div class="mt-2">
                            <input type="text" class="form-control" name="taxid" style="width:100%;max-width:500px;" placeholder="โปรดระบุ...">
                        </div>
                    </label>
                </div>
            </div>
            <div class="col-12 mt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tax" id="tax_no" value="ไม่มีความประสงค์">
                    <label class="form-check-label" for="tax_no">ไม่มีความประสงค์</label>
                </div>
            </div>
        </div>
    </div>
    <div class="section-title mt-4"><u>คำรับรองของผู้ขอเอาประกันภัย</u></div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2">
    <div class="col-md-12 mb-2">
                <span>ผู้ขอเอาประกันภัยประสงค์จะเลือกรับกรมธรรม์ประกันภัยผ่านทางช่องทางใด</span>
            </div>
            <div class="col-12 col-md-6 mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="policy_email" id="policy_email">
                    <label class="form-check-label" for="policy_email">รับเป็น e-policy ทางอีเมล์ (Email) ที่ระบุไว้</label>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="policy_post" id="policy_post">
                    <label class="form-check-label" for="policy_post">รับเป็นเอกสาร โดยส่งให้ทางไปรษณีย์ ตามที่อยู่ที่ระบุไว้</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span>เป็นที่ตกลงกันระหว่างผู้ขอเอาประกันภัยและบริษัทว่า กรมธรรม์ประกันภัยนี้จะไม่ให้ความคุ้มครองแก่ผู้ขอเอาประกันภัยสำหรับ                    การบาดเจ็บหรือการเจ็บป่วยซึ่งเกิดขึ้นโดยตรง หรือสืบเนื่องมาจาก หรือเป็นอาการแทรกซ้อนของการบาดเจ็บหรือการเจ็บป่วยใดๆ                       ที่ผู้ขอเอาประกันภัยได้แถลงไว้ในใบคำขอเอาประกันภัยนี้หรือที่บริษัทยกเว้นตามที่ได้ระบุในเอกสารแนบท้ายยกเว้นความคุ้มครองเฉพาะโรค ซึ่งผู้ขอเอาประกันภัยได้รับทราบและยินยอมตามเงื่อนไขนี้ทุกประการ (โดยบริษัทจะออกเอกสารแนบท้ายยกเว้นความคุ้มครองเฉพาะโรคนั้นๆ เป็นการเฉพาะ)
                ผู้ขอเอาประกันภัยมีความประสงค์ขอเอาประกันภัยกับบริษัทตามเงื่อนไขของกรมธรรม์ประกันภัยที่บริษัทได้ใช้สำหรับการประกันภัยนี้  และ ผู้ขอเอาประกันภัยขอรับรองว่ารายละเอียดต่างๆ ข้างต้นนี้ถูกต้องและสมบูรณ์ ผู้ขอเอาประกันภัยตกลงที่จะให้คำขอเอาประกันภัยนี้เป็นมูลฐานของสัญญาประกันภัยระหว่างผู้ขอเอาประกันภัยและบริษัท หากรายละเอียดของผู้ขอเอาประกันภัยเป็นเท็จหรือปกปิดไม่แจ้งความจริง ผู้ขอเอาประกันภัยยินยอมให้บริษัทบอกเลิกสัญญาประกันภัยได้ 
ผู้ขอเอาประกันภัยยินยอมให้บริษัทจัดเก็บ ใช้ และเปิดเผยข้อเท็จจริงเกี่ยวกับสุขภาพและข้อมูลของผู้ขอเอาประกันภัยต่อสำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย (คปภ.) เพื่อประโยชน์ในการกำกับดูแลธุรกิจประกันภัย     
บริษัทมีสิทธิตรวจสอบประวัติการรักษาพยาบาลและการตรวจวินิจฉัยของผู้เอาประกันภัยเท่าที่จำเป็นกับการประกันภัยนี้ และมีสิทธิทำการชันสูตรพลิกศพในกรณีที่มีเหตุจำเป็นและไม่เป็นการขัดต่อกฎหมายโดยค่าใช้จ่ายของบริษัท
ในกรณีที่ผู้เอาประกันภัยไม่ยินยอมให้บริษัทตรวจสอบประวัติการรักษาพยาบาลและการตรวจวินิจฉัยของผู้เอาประกันภัยเพื่อประกอบการพิจารณาจ่ายค่าทดแทนนั้น บริษัทสามารถปฏิเสธการให้ความคุ้มครองแก่ผู้เอาประกันภัยได้
</span>
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2">
            <div class="col-md-6 mb-2">
                <label>ลงชื่อผู้ขอเอาประกันภัย</label>
                <div class="mb-2">
                    <canvas id="signature_applicant_pad" width="350" height="150" style="border:1px dotted #333;background:#fff;"></canvas>
                    <input type="hidden" name="signature_applicant_img" id="signature_applicant_img">
                    <br>
                    <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="clearSignature('signature_applicant_pad','signature_applicant_img')">ล้างลายเซ็น</button>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-2">(</span>
                    <input type="text" class="form-control d-inline-block" name="name_applicant" style="width:500px;max-width:100%;" placeholder="ชื่อผู้ขอเอาประกันภัย">
                    <span class="ms-2">)</span>
                </div>
                <label class="mt-2">วันที่ขอเอาประกันภัย</label>
                <input type="date" class="form-control" name="date_applicant" placeholder="เลือกวันที่">
            </div>
            <div class="col-md-6 mb-2">
                <label>ผู้ปกครองโดยชอบธรรม</label>
                <div class="mb-2">
                    <canvas id="signature_guardian_pad" width="350" height="150" style="border:1px dotted #333;background:#fff;"></canvas>
                    <input type="hidden" name="signature_guardian_img" id="signature_guardian_img">
                    <br>
                    <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="clearSignature('signature_guardian_pad','signature_guardian_img')">ล้างลายเซ็น</button>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-2">(</span>
                    <input type="text" class="form-control d-inline-block" name="name_guardian" style="width:500px;max-width:100%;" placeholder="ชื่อผู้ปกครอง">
                    <span class="ms-2">)</span>
                </div>
                <label class="mt-2">วันที่ขอเอาประกันภัย</label>
                <input type="date" class="form-control" name="date_guardian" placeholder="เลือกวันที่">
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2">
            <div class="col-md-12 mb-2">
                <span>เอกสารนี้ไม่ใช่สัญญาประกันภัย ท่านจะได้รับความคุ้มครองเมื่อได้รับการยืนยันจากบริษัทแล้ว
สำเนาของการมอบอำนาจนี้ ให้มีผลและสมบูรณ์เช่นเดียวกับต้นฉบับ
</span>
            </div>
        </div>
    </div>
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2 align-items-center justify-content-center">
            <div class="col-md-12 text-center">
                <span class="me-3"><input type="checkbox" name="direct_insurance" id="direct_insurance"> <label for="direct_insurance">การประกันภัยโดยตรง</label></span>
                <span class="me-3"><input type="checkbox" name="agent_insurance" id="agent_insurance"> <label for="agent_insurance">ตัวแทนประกันวินาศภัย</label></span>
                <span class="me-3"><input type="checkbox" name="broker_insurance" id="broker_insurance"> <label for="broker_insurance">นายหน้าประกันวินาศภัยรายนี้</label></span>
                <span class="ms-2">ใบอนุญาตเลขที่ <input type="text" class="form-control d-inline-block" name="license_no" style="width:200px;max-width:100%;vertical-align:middle;display:inline-block;" placeholder="โปรดระบุ..."></span>
            </div>
        </div>
    </div>
    <div class="section-title mt-4"><u>คำเตือนของสำนักงานคณะกรรมการกำกับและส่งเสริมการประกอบธุรกิจประกันภัย (คปภ.)</u></div>
    
    <div class="border rounded p-3 mb-3" style="background:#fafafa;">
        <div class="row mb-2">
            <div class="col-md-12 mb-2">
                <span>ให้ตอบคำถามข้างต้นตามความเป็นจริงทุกข้อ หากผู้เอาประกันภัยปกปิดข้อความจริง หรือแถลงข้อความอันเป็นเท็จจะมีผลให้สัญญาประกันภัยนี้ตกเป็นโมฆียะ ซึ่งบริษัทมีสิทธิบอกล้างสัญญาประกันภัยตามประมวลกฎหมายแพ่งและพาณิชย์ มาตรา 865</span>
            </div>
        </div>
    </div>
    <div class="d-flex gap-3 mt-4">
        <button type="submit" class="btn w-100" style="background:#0a3556;color:#fff;border:none;">ส่งแบบฟอร์ม</button>
        <button type="reset" class="btn w-100" style="background:#fff;color:#0a3556;border:2px solid #0a3556;">ล้างแบบฟอร์ม</button>
    </div>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
<script>
    const applicantPad = new SignaturePad(document.getElementById('signature_applicant_pad'));
    const guardianPad = new SignaturePad(document.getElementById('signature_guardian_pad'));
    function clearSignature(canvasId, inputId) {
        const pad = canvasId === 'signature_applicant_pad' ? applicantPad : guardianPad;
        pad.clear();
        document.getElementById(inputId).value = '';
    }
    document.getElementById('insuranceForm').addEventListener('submit', function(e) {
        // Save signatures to hidden fields
        if (!applicantPad.isEmpty()) {
            document.getElementById('signature_applicant_img').value = applicantPad.toDataURL();
        } else {
            alert('กรุณาลงลายเซ็นผู้ขอเอาประกันภัย');
            e.preventDefault();
            return false;
        }
        
        if (!guardianPad.isEmpty()) {
            document.getElementById('signature_guardian_img').value = guardianPad.toDataURL();
        }
        
        // Basic form validation
        const nameApplicant = document.querySelector('input[name="name_applicant"]').value;
        const dateApplicant = document.querySelector('input[name="date_applicant"]').value;
        
        if (!nameApplicant) {
            alert('กรุณากรอกชื่อผู้ขอเอาประกันภัย');
            e.preventDefault();
            return false;
        }
        
        if (!dateApplicant) {
            alert('กรุณาเลือกวันที่ขอเอาประกันภัย');
            e.preventDefault();
            return false;
        }
        
        return true;
    });
</script>
</form>
</div>