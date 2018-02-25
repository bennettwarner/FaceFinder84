import face_recognition
from PIL import Image
import time
import MySQLdb as mysql
import base64

DB_HOST = '159.89.235.137'
DB_USER = 'ff84'
DB_PASSWORD = 'xm6829bs'
DB_NAME = 'ff84'

def process_image(encoded_file):

    # Set up database connection
    db = mysql.connect(host=DB_HOST, user=DB_USER, passwd=DB_PASSWORD, db=DB_NAME)
    conn = db.cursor()

    conn.execute('SELECT COUNT(*) FROM faces')
    count = conn.fetchone()[0]

    image_path = 'temp/temp.jpg'.format(count)
    location = 'Rowan University'

    query = 'INSERT INTO faces(img_path, location) VALUES ("{0}", "{1}")'.format(image_path, location)
    conn.execute(query)
    db.commit()
    db.close()

    file = open(image_path, 'wb')
    file.write(base64.b64decode(encoded_file)
    file.close()

    image = face_recognition.load_image_file(file)
    face_locations = face_recognition.face_locations(image)
    count = 1
    for face_location in face_locations:
        top,right,bottom,left = face_location
        face_image = image[top:bottom, left:right]
        pil_image = Image.fromarray(face_image)
        pil_image.save(open('../html/faces'+str(int(time.time()))+'-'+str(count)+'.png', 'wb'))
