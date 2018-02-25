#Author: Alexander Leventhal
import os, cv2, base64, requests


url = 'http://localhost:1337/'
ip = "rtsp://192.168.1.246:554/11.h264"
vcap = cv2.VideoCapture(ip)

count=1
while(1):
    ret, frame = vcap.read()
    #Captures at 1 frame a second, since 30fps
    if(count % 30 == 0):
        retval, buffer = cv2.imencode('.jpg',frame)
        b64_image = base64.b64encode(buffer)
        file = { 'file' : b64_image}
        requests.post(url, files=file)
    cv2.waitKey(1)
    count+=1  
