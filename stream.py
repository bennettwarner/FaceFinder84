#Author: Alexander Leventhal
import os, cv2, time, base64, requests
url = 'http://ff84.wcupa.network:1337/'
ip = "rtsp://192.168.1.246:554/11.h264"
vcap = cv2.VideoCapture(ip)
count=1
while(1):
    #having the two variables tells vcap.read to unpack the tuple
    ret, frame = vcap.read()
    if(count % 30 == 0):
        cv2.imwrite(str(count)+".jpg", frame)
        image = open(str(count)+'.jpg', 'rb')
        image_raw = image.read()
        files = {'media': base64.encodestring(image_raw)}
        requests.post(url, files=files)
        #os.remove(str(count)+'.jpg')
    cv2.waitKey(1)
    count+=1
    
