# Author: Ellis Madagan
# Last update: 2/25/2018


import os
import time
import MySQLdb as mysql
import face_recognition

DB_HOST = ''
DB_USER = ''
DB_PASSWORD = ''
DB_NAME = ''

# Set up database connection
db = mysql.connect(host=DB_HOST, user=DB_USER, passwd=DB_PASSWORD, db=DB_NAME)
conn = db.cursor()


def lookup_face(path):
    conn.execute('SELECT id FROM faces WHERE img_path = "' + path + '"')
    return conn.fetchone()[0]


def get_scanned():
    conn.execute('SELECT * FROM uploads')
    return [x[1] for x in conn.fetchall()]


def run_comparison(new_files):
    found_face = False
    if len(os.listdir('html/faces')) > 0:
        for face in os.listdir('html/faces'):
            face_file = face_recognition.load_image_file('html/faces/' + face)
            try:
                face_encoding = face_recognition.face_encodings(face_file)[0]
            except:
                continue
            for upload in new_files:
                uploaded_file = face_recognition.load_image_file('html/uploads/' + upload)
                try:
                    uploaded_file_face_encoding = face_recognition.face_encodings(uploaded_file)[0]
                except:
                    continue
                results = face_recognition.compare_faces([face_encoding], uploaded_file_face_encoding)
                if results[0] == True:
                    found_face = True
                    number = lookup_face('html/faces/' + face)
                    conn.execute('INSERT INTO matches (case_num, face_id) VALUES ({0}, "{1}")'.format(int(upload.split('.')[0]), number))
        if found_face:
            conn.execute('INSERT INTO uploads (filename) VALUES ("{}")'.format(str(upload)))
        conn.execute('UPDATE cases SET complete = 1 WHERE img_path = "uploads/' + upload + '"')
        # Commit our changes to the database
        db.commit()


def scan_uploads():
    already_scanned = get_scanned()
    new_files = []
    for file in os.listdir('html/uploads'):
        if file not in already_scanned:
            new_files.append(file)
    if len(new_files) > 0:
        run_comparison(new_files)


while 1:
    print('Scanning for new uploads...')
    scan_uploads()
    time.sleep(1)
