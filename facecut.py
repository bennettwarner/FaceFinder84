# Author: Ellis Madagan
# Last update: 2/25/2018

from PIL import Image
import face_recognition
import time
import MySQLdb as mysql
import base64
import os

DB_HOST = '159.89.235.137'
DB_USER = 'ff84'
DB_PASSWORD = 'xm6829bs'
DB_NAME = 'ff84'

def process_image(encoded_file):

    # Set up database connection
    db = mysql.connect(host=DB_HOST, user=DB_USER, passwd=DB_PASSWORD, db=DB_NAME)
    conn = db.cursor()

    location = 'Rowan University'

    # Write temp image
    with open('temp/temp.jpg', 'wb') as file:
        file.write(base64.b64decode(encoded_file))

    image = face_recognition.load_image_file('temp/temp.jpg')
    face_locations = face_recognition.face_locations(image)
    count = 1
    for face_location in face_locations:
        top,right,bottom,left = face_location
        face_image = image[top:bottom, left:right]
        pil_image = Image.fromarray(face_image)
        pil_image_path = 'html/faces/' + str(int(time.time())) + '-' + str(count) + '.png'
        count += 1
        pil_image.save(open(pil_image_path, 'wb'))
        conn.execute('INSERT INTO faces(img_path, location) VALUES ("{0}", "{1}")'.format(pil_image_path, location))

    # Remove temp file
    os.remove('temp/temp.jpg')

    db.commit()
    db.close()

