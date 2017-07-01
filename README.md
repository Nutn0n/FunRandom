# FunRandom
Random Meta OG for fun!

** รันบน server ที่อ่าน PHP เท่านั้น ** 

## วิธีใช้

- ทำการโคลนด้่วยคำสั่ง ```Git clone https://github.com/Nutn0n/FunRandom.git``` หรือ Download แบบ zip
- เปลี่ยนชื่อโฟลเดอร์ตามที่ต้องการ 
- แก้ไข  index.php โดยใส่คำต่าง ๆ ที่ต้องการสุ่ม
- ทดสอบว่าใช้งานได้ไหมบน https://developers.facebook.com/tools/debug/ 

ณ ตอนนี้ Facebook จะยังทำการ cache ข้อมูลเอาไว้ ซึ่งเกมนี้จำเป็นต้องให้ Facebook ทำการ Scrape ใหม่ตลอดเวลา ดังนั้นเราจึงต้องเขียนคำสั่งขึ้นมายิงไปที่ Server ของ Facebook ให้มันทำการ Scrape หน้าเว็บของเราทุก 5 วินาที

- ในหน้า debug ให้เลื่อนลงไปล่างสุดจนเจอคำว่า "Scrape via API"
- บริเวณปุ่มด้านขวาเหนือคำว่า Submit ให้เลือก Token ของเพจทีเราต้องการจะใช้ (จำเป็น)
- กดปุ่ม Submit
- หน้าจอจะแสดงข้อมูลต่าง ๆ ไม่ต้องสนใจให้เราเลื่อนลงไปหาคำว่า Get Code ล่างจอ
- จะมีโค้ดภาษาต่าง ๆ ให้เลือก แต่ให้เราเลือกเป็น cURL จากนั้นก็อปคำสั่งนั้นเก็บเอาไว้ 

คำสั่งนี้เมื่อเราพิมพ์เข้าไปใน Terminal มันจะทำการยิงข้อความไปบอกให้ Facebook ทำการ Scrape หน้าเว็บของเราใหม่ แต่ในคำสั่งนี้ มันจะทำการ Scrape เพียงครั้งเดียวเท่านั้่น เราต้องทำให้มันยิงคำสั่งเรื่อย ๆ ด้วยคำสั่ง ```watch -n 5 **ตามด้วยโค้ดที่เราก็อปมา**``` เพื่อสั่งให้มันยิงข้อความไปบอก Facebook ทุก 5 วินาที

- เปิด Terminal แล้วพิมพ์คำสั่งตามที่บอกลงไป
- เรียบร้อย หน้าเว็บของเราจะถูก Scrape ใหม่ทุก 5 วินาที 

(โปรแกรม watch นั้นมีอยู่บน Terminal อยู่แล้ว หากไม่มี สามารถติดตั้งได้ด้วยคำสั่ง ```apt-get install watch``` บน Ubuntu หรือ ```brew install watch``` บน Mac )

หลังจากที่เราทำการรันคำสั่งไปเรียบร้อยแล้วให้เปิดหน้านั้นค้างเอาไว้ เพื่อให้มันยิงข้อความไปสั่งให้ Facebook ทำการ Scrape เรื่อย ๆ 

## ตัวอย่างคำสั่งที่รันบน Terminal

** ห้ามก็อปคำสั่งนี้ไป เพราะโค้ดหลังคำว่า curl เป็นต้นไปของแต่ละคนจะไม่เหมือนกัน ** 

```  watch -n 5 curl -i -X POST    -d "scrape=true"    -d "id=http%3A%2F%2Fbeta.s    paceth.co%2FFunRandom"    -d "access_token=EAACEdEose0cBAHTrL2qEYy19JDO2k80m    lZCoEV5ZAcyWZBNQ2fhQP7kmNzrlTgxm0foZBqodBCxsZAflXSDeTHvz2OASOdF29vdGDRMFSGEi    QaZAngPmSOZBln3cfn9hw61Bjy8Xw30sq0fxXLpnxZB9ZAfVo8r3xKn6ZA2XCt3OEnpOxsSNhMJ1    b1HYxRh9ZBPZBZBsZD"    "https://graph.facebook.com/v2.9/"   ```

Code by @Nutn0n - www.nutn0n.com 





