import cv2
import time
ip = "rtsp://192.168.1.246:554/11.h264"
vcap = cv2.VideoCapture(ip)
count=1
while(1):
    #having the two variables tells vcap.read to unpack the tuple
    ret, frame = vcap.read()
    if(count % 30 == 0):
        cv2.imwrite(str(count)+".jpg", frame)
    cv2.waitKey(1)
    count+=1
