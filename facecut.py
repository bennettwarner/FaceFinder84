import face_recognition
from PIL import Image
import time
def process_image(file):
    image = face_recognition.load_image_file(file)
    face_locations = face_recognition.face_locations(image)
    count = 1
    for face_location in face_locations:
        top,right,bottom,left = face_location
        face_image = image[top:bottom, left:right]
        pil_image = Image.fromarray(face_image)
        pil_image.save(open('../html/faces-'+str(int(time.time()))+'-'+str(count)+'.png', 'wb'))
