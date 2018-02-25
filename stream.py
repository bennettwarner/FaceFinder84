#Author: Alexander Leventhal
import os, cv2, time, base64, requests
url = 'http://ff84.wcupa.network:1337/'
ip = "rtsp://192.168.1.246:554/11.h264"
vcap = cv2.VideoCapture(ip)
count=1
img_num = 1
while(1):
    #having the two variables tells vcap.read to unpack the tuple
    ret, frame = vcap.read()
    if(count % 30 == 0):
        cv2.imwrite(str(img_num)+".jpg", frame)
        image = open(str(img_num)+'.jpg', 'rb')
        image_raw = image.read()
        requests.post(url, files=image_raw)
        #os.remove(str(count)+'.jpg')
    cv2.waitKey(1)
    count+=1  
